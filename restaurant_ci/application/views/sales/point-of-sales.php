    <div id="body-container">
        <nav>
            <!-- <i class="fa fa-bars"></i> -->
            <div>
                <a href="#" title="Test1"><i class="fa fa-coffee"></i></a>
                <a href="#" title="Test1"><i class="fa fa-photo"></i></a>
                <a href="#" title="Test1"><i class="fa fa-print"></i></a>
            </div>
            <i class="fa fa-power-off" title="Log Out" onclick="window.location.href='#modal-logout'"></i>
        </nav>
        <section class="sec-left">
            <article>
                <div class="nav-search">
                    <div class="search-con">
                        <input type="search" class="search-content" placeholder="Search Product">
                        <div class="fa fa-search"></div>
                    </div>
                    <select class="category-content">
                        <option>All Category</option>
                        <option>First</option>
                        <option>Second</option>    
                    </select>
                </div>
                <div class="menu-container">
                    <?php 
                        for($x = 1; $x < 5; $x++){
                    ?>
                    <div class="row-product">
                        <div class="product-menu" onclick="window.location.href='#modal-info'">
                            <div class="product-menu-price">15.000</div>
                            <img src="<?= base_url('asset/img/test.jpg'); ?>">
                            <div class="product-menu-head">Nasi Goreng Nasi Goreng Nasi Goreng Nasi Goreng</div>
                            <div class="product-menu-code">#01920</div>
                        </div>
                        <div class="product-menu" onclick="window.location.href='#modal-info'">
                            <div class="product-menu-price">15.000</div>
                            <img src="<?= base_url('asset/img/test.jpg'); ?>">
                            <div class="product-menu-head">Mie Goreng</div>
                            <div class="product-menu-code">#01320</div>
                        </div>
                        <div class="product-menu" onclick="window.location.href='#modal-info'">
                            <div class="product-menu-price">15.000</div>
                            <img src="<?= base_url('asset/img/test.jpg'); ?>">
                            <div class="product-menu-head">Gorengan</div>
                            <div class="product-menu-code">#01921</div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
                <div class="info-label"> { username : <?= $user['userName'];?> } , { date : <?= $date;?> }</div>
            </article>
        </section>
        <section class="sec-right">
            <article class="flex-row back-order">
                <div class="order-number">
                    <b class="order-number-title">Order Number</b><br/>
                    <b class="order-number-no">ORD-213120129839</b>
                </div>
                <div class="order-list">
                    <button onclick="myDropOrder()" id="droporder" class="order-list-drop o-radius">
                        <div class="order-list-title">Table</div> 
                        <div class="order-list-no">#21</div>
                    </button>
                    <div id="myDropOrder" class="dropdown-order">
                        <a href="#" title="ORD-213312313">
                            <span>
                                <div>
                                    <div>ORD-213312313</div>
                                    <small>Table No. #23</small>
                                </div>
                                <div>
                                    <div>Rp. 29.000</div>
                                    <small class="red">Waiter Name</small>
                                </div>
                            </span> 
                        </a>
                        <a href="#" title="ORD-213312313">
                            <span>
                                <div>
                                    <div>ORD-213312313</div>
                                    <small>Table No. #24</small>
                                </div>
                                <div>
                                    <div>Rp. 29.000</div>
                                    <small class="green">Waiter Name</small>
                                </div>
                            </span> 
                        </a>
                        <a href="#" title="ORD-213312313">
                            <span>
                                <div>
                                    <div>ORD-213312313</div>
                                    <small>Table No. #23</small>
                                </div>
                                <div>
                                    <div>Rp. 29.000</div>
                                    <small class="red">Waiter Name</small>
                                </div>
                            </span> 
                        </a>
                        <a href="#" title="ORD-213312313">
                            <span>
                                <div>
                                    <div>ORD-213312313</div>
                                    <small>Table No. #23</small>
                                </div>
                                <div>
                                    <div>Rp. 29.000</div>
                                    <small class="red">Waiter Name</small>
                                </div>
                            </span> 
                        </a>
                    </div>
                </div>
            </article>            
            <article class="flex-row back-order-head">
                <b class="name-width">Name</b>
                <b class="name-qty">Qty</b>
                <b class="name-total">Total</b>
            </article>
            <article>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li>+ Pedas</li>
                                <li>+ Pedas</li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li>+ Pedas</li>
                                <li>+ Pedas</li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li></li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li></li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li></li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
                <div class="order-row flex-row">
                    <b class="name-width">
                        <span>1. </span>
                        <span>
                            <div>Nasi Goreng Rendang Padang Nasi Goreng Rendang Padang</div>
                            <small>#123123 - Rp.15.000</small>
                            <ul>
                                <li></li>
                            </ul>
                        </span>
                    </b>
                    <b class="name-qty">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input type="number" name="qty" min="0" value="1">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </b>
                    <b class="name-total">Rp. 20.000</b>
                </div>
            </article>
            <article class="flex-row">
                <div>
                    <b>Discount %</b>
                    <b>Sub Total</b>
                    <b>Tax</b>
                    <b class="total-col">TOTAL</b>
                </div>
                <div>
                    <b>Rp.</b>
                    <b>Rp.</b>
                    <b>Rp.</b>
                    <b class="total-col">Rp.</b>
                </div>
                <div>
                    <b>20.000</b>
                    <b>130.000</b>
                    <b>0</b>
                    <b class="total-col">150.000</b>
                </div>
            </article>       
            <article class="flex-row">
                <div class="other-list">
                    <div  id="otherMenu" class="other-menu">
                        <a href="#">Halah</a>
                        <a href="#">Halah</a>
                        <a href="#">Halah</a>
                    </div>
                    <button onclick="myOtherMenu()" id="btn-other"><i class="fa fa-sort-asc"></i></button>
                </div>
                <button id="btn-process"><i class="fa fa-refresh"></i> Process Order</button>
                <button id="btn-pay"><i class='fa fa-check-square'></i> Payment</button>
            </article>
        </section>
    </div>
