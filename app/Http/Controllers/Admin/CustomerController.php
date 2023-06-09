<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->index();
        return view('admin.customers.customers')->with(['customers' => $customers]);
    }

    public function delete($id)
    {
        $this->customerService->delete($id);
        return redirect()->route('admin.customers');
    }

}
