<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khachhang;  // Đảm bảo sử dụng đúng model Khachhang
use Illuminate\Support\Facades\DB; // Import class DB


class CustomerController extends Controller
{
 
    // Hiển thị danh sách khách hàng
    public function index()
    {
        // Lấy tất cả khách hàng từ database (dùng model Khachhang)
        $Customers = Khachhang::paginate(10);  // Chú ý là cần sử dụng model Khachhang ở đây
        
        // Trả về view 'admin.customers.index' với danh sách khách hàng
        return view('admin.customers.index', compact('Customers'));
    }
    
 public function searchCustomer(Request $request)
{

    // Lấy từ khóa tìm kiếm từ request
    $search = $request->input('search', '');

    // Tìm kiếm trong bảng khách hàng
    $Customers = DB::table('khachhang')
        ->where('id_kh', 'like', '%' . $search . '%')  // Tìm kiếm theo ID khách hàng
        ->orWhere('hoten', 'like', '%' . $search . '%')  // Tìm kiếm theo tên khách hàng
        ->paginate(10);  // Lấy kết quả tìm kiếm

    // Kiểm tra nếu không có kết quả
    if ($Customers->isEmpty()) {
        // Trả về view với thông báo không tìm thấy
        return view('admin.customers.index', [
            'Customers' => $Customers,
            'search' => $search,
            'message' => 'Không tìm thấy khách hàng nào.'
        ]);
    }

    // Trả về view với kết quả tìm kiếm
    return view('admin.customers.index', compact('Customers', 'search'));
}

    
 //xóa

public function destroy($id)
{
    try {
        // Xóa khách hàng dựa trên ID
        DB::table('khachhang')->where('id_kh', $id)->delete();

        // Chuyển hướng về danh sách khách hàng với thông báo thành công
        return redirect()->route('customer.index')->with('success', 'Khách hàng đã được xóa thành công.');
    } catch (\Exception $e) {
        // Nếu xảy ra lỗi, trả về với thông báo lỗi
        return redirect()->route('customer.index')->with('error', 'Đã xảy ra lỗi khi xóa khách hàng.');
    }
}

public function edit($id)
{
    $customer = khachhang::findOrFail($id);
    return view('admin.customers.edit', compact('customer'));
}
public function update(Request $request, $id)
{
    // Validate các trường dữ liệu
    $request->validate([
        'id_phanquyen' => 'required|numeric',
        
    ]);

    // Tìm khách hàng trong database theo ID
    $customer = khachhang::findOrFail($id);

    // Cập nhật thông tin khách hàng
    $customer->update($request->all());

    // Quay lại danh sách khách hàng và thông báo thành công
    return redirect()->route('customers.index')->with('success', 'Khách hàng đã được cập nhật thành công!');
}

}

?>