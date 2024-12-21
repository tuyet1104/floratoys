<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\IAdminRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    private $AdminRepository;

    public function __construct(IAdminRepository $AdminRepository) {
        $this->AdminRepository = $AdminRepository;
    }

    public function index(){
        return view('admin_login');
    }
    public function dashboard(){
        $getOrderView = $this->AdminRepository->getOrderView();
        $totalsCustomer = $this->AdminRepository->totalsCustomer();
        $totalsOrders = $this->AdminRepository->totalsOrders();
        $totalsMoney = $this->AdminRepository->totalsMoney();
        $totalsSaleProducts = $this->AdminRepository->totalsSaleProducts();
        return view('admin.dashboard', 
        [
         'getOrderView' => $getOrderView,
         'totalsCustomer' => $totalsCustomer,
         'totalsOrders' =>  $totalsOrders, 
         'totalsMoney' => $totalsMoney, 
         'totalsSaleProducts' => $totalsSaleProducts
        ]);
    }
    public function search(Request $request){
        $searchs = $this->AdminRepository->searchProduct($request);
        return view('admin.products.search')->with('searchs', $searchs)->with('tukhoa', $request->input('tukhoa'));
    }
    public function signin_dashboard(Request $request){
        return $this->AdminRepository->signIn($request);
    }
    public function admin_logout(){
        return $this->AdminRepository->logOut();
    }


    public function searchOrders(Request $request)
    {
        $search = trim($request->input('search')); // Lấy từ khóa tìm kiếm và loại bỏ khoảng trắng thừa
    
        // Tìm kiếm trong bảng dathang 
        $orders = DB::table('dathang')
            ->where('id_dathang', 'like', "%$search%")  // Tìm kiếm theo id_dathang
            ->orWhere('trangthai', 'like', "%$search%") // Tìm kiếm theo trangthai
            ->paginate(2);  // Phân trang 2 đơn hàng mỗi trang
    
        // Giữ lại tham số tìm kiếm cho phân trang
        $orders->appends(['search' => $search]);
    
        // Trả về kết quả tìm kiếm và danh sách đơn hàng
        return view('admin.orders.search', [
            'orders' => $orders,
            'search' => $search // Đảm bảo rằng search được truyền vào view
        ]);
    }
    // AdminController.php

    public function searchDanhmuc(Request $request)
    {
    $search = $request->input('search'); // Lấy từ khóa tìm kiếm

    // Tìm kiếm trong bảng danhmuc
    $Danhmucs = DB::table('danhmuc')
        ->where('ten_danhmuc', 'like', '%' . $search . '%')  // Tìm kiếm theo tên danh mục
        ->orWhere('id_danhmuc', 'like', '%' . $search . '%')  // Tìm kiếm theo ID danh mục (nếu cần)
        ->get();  // Lấy kết quả tìm kiếm

    // Kiểm tra nếu không có kết quả
    if ($Danhmucs->isEmpty()) {
        // Trả về view với thông báo không tìm thấy
        return view('admin.danhmucs.index', [
            'Danhmucs' => $Danhmucs,
            'search' => $search,
            'message' => 'Không tìm thấy danh mục nào.'
        ]);
    }

    // Trả về view nếu có kết quả tìm thấy
    return view('admin.danhmucs.index', compact('Danhmucs', 'search'));
}

// Tìm kiếm khách hàng
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
//edit
public function edit($id)
{
    $customer = Customer::findOrFail($id);
    return view('customers.edit', compact('customer'));
}
public function update(Request $request, $id)
{
    // Validate các trường dữ liệu
    $request->validate([
        'id_phanquyen' => 'required|numeric',
        
    ]);

    // Tìm khách hàng trong database theo ID
    $customer = Customer::findOrFail($id);

    // Cập nhật thông tin khách hàng
    $customer->update($request->all());

    // Quay lại danh sách khách hàng và thông báo thành công
    return redirect()->route('customers.index')->with('success', 'Khách hàng đã được cập nhật thành công!');
}
}

    

    


