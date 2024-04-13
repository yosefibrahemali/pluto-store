@include('layouts.app')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>                    
                <span></span> orders
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    
                                </div>
                                
                                <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab" href="{{ route('admin.orders') }}">
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">All Orders</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Fname</th>
                                                            <th>Lname</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Products</th>
                                                            <th>Sizes</th>
                                                            <th>Shipping Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $order)
                                                        <tr>
                                                        
                                                                
                                                           
                                                            <td>#00{{$order->id}}</td>
                                                            <td>{{$order->fname}}</td>
                                                            <td>{{$order->lname}}</td>
                                                            <td>{{$order->email}}</td>
                                                            <td>{{$order->phone}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td>
                                                                <form action="{{route('admin.update.orders',$order->id)}}" method="POST">
                                                                    @csrf
                                                                <select name="stock_status" id="stock_status" >
                                                                    <option value="{{$order->stock_status}}">{{$order->stock_status}}</option>
                                                                    <option value="Being Processed">Being Processed</option>
                                                                    <option value="In Process">In Process</option>
                                                                    <option value="Under Shipment">Under Shipment</option>
                                                                    <option value="Delivered">Deliverd</option>
                                                                    <option value="Rejected">Rejected</option>
                                                                </select>
                                                                <center><button type="submit">Done</button></center>
                                                            </form>
                                                            </td>
                                                            <td>LYD{{$order->total}}</td>

                                                            <td>{{$order->product_id}}</td>
                                                            <td>{{$order->size}}</td>
                                                            <td>{{$order->address}} <br> {{$order->address2}} <br> {{$order->city}} <br> {{$order->region}}</td>
                                                         
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>