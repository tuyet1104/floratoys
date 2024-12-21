<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // Đặt hàng với COD
    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'hoten' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sdt' => 'required|string|max:15',
            'diachi' => 'required|string|max:255',
            'phuongthucthanhtoan' => 'required',
            'tongtien' => 'required|integer',
        ]);

        $order = new Order();
        $order->id_kh = $request->id_kh;
        $order->hoten = $request->hoten;
        $order->email = $request->email;
        $order->sdt = $request->sdt;
        $order->diachi = $request->diachi;
        $order->note = $request->note;
        $order->phuongthucthanhtoan = $request->redirect;
        $order->tongtien = $request->tongtien;
        $order->save();

        return redirect()->back()->with('success', 'Đặt hàng thành công!');
    }

    // Xử lý thanh toán qua VNPAY
    public function vnpay(Request $request)
    {
        // Thêm logic thanh toán VNPAY ở đây.
        return redirect()->back()->with('success', 'Thanh toán qua VNPAY thành công!');
    }
}
