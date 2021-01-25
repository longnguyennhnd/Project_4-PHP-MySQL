<div class="col-lg-3 order-lg-1 order-2">
    <!-- Single Sidebar Start  -->
    <div class="common-sidebar-widget">
        <h3 class="sidebar-title">Product categories</h3>
        <ul class="sidebar-list">
            @foreach($category as $key)
            <li><a href="/loai-san-pham/{{$key->Id}}"><i class="fa fa-plus"></i>{{$key->category_name }}<span class="count">(14)</span></a></li>
            @endforeach
        </ul>
    </div>
    <!-- Single Sidebar End  -->
    <!-- Single Sidebar Start  -->
    <div class="common-sidebar-widget">
        <h3 class="sidebar-title">Lọc theo khoảng giá</h3>
        <div class="sidebar-price">
            <div id="price-range" class="mb-20"></div>
            <button type="button" class="btn">Lọc</button>
            <input type="text" id="price-amount" class="price-amount" readonly>
        </div>
    </div>
    <!-- Single Sidebar End  -->
    <!-- Single Sidebar Start  -->
    
    <!-- Single Sidebar End  -->
    <!-- Single Sidebar Start  -->
    
    <!-- Single Sidebar End  -->
    <!-- Single Sidebar Start  -->
    <div class="common-sidebar-widget">
        <h3 class="sidebar-title">Thẻ</h3>
        <ul class="sidebar-tag">
            <li><a href="#">Giường ngủ</a></li>
            <li><a href="#">Sofa</a></li>
            <li><a href="#">Ghế văn phòng</a></li>
        </ul>
    </div>
    <!-- Single Sidebar End  -->
</div>
