<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == "kasir") {
                echo "
                <li class='nav-item'>
                    <a href='?page=kasir' class='nav-link active'>
                        <i class='nav-icon fas fa-cash-register'></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon far fa-user-circle'></i>
                        <p>
                            My Profile
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=profile' class='nav-link'>
                                <i class='fas fa-user-alt'></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-box-open'></i>
                        <p>
                            Inventory
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=productlist' class='nav-link'>
                                <i class='fas fa-box'></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-money-bill-wave'></i>
                        <p>
                            Cash Flow
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=cashin' class='nav-link'>
                                <i class='far fa-plus-square'></i>
                                <p>Add Cash-in/Cash-out</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item logout-css'>
                    <a href='php/logout.php' class='nav-link'>
                        <i class='nav-icon fas fa-sign-out-alt'></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                ";
            } elseif ($page == "myprofile") {
                echo "
                <li class='nav-item'>
                    <a href='?page=kasir' class='nav-link'>
                        <i class='nav-icon fas fa-cash-register'></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link active'>
                        <i class='nav-icon far fa-user-circle'></i>
                        <p>
                            My Profile
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=profile' class='nav-link'>
                                <i class='fas fa-user-alt'></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-box-open'></i>
                        <p>
                            Inventory
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=productlist' class='nav-link'>
                                <i class='fas fa-box'></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-money-bill-wave'></i>
                        <p>
                            Cash Flow
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=cashin' class='nav-link'>
                                <i class='far fa-plus-square'></i>
                                <p>Add Cash-in/Cash-out</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item logout-css'>
                    <a href='php/logout.php' class='nav-link'>
                        <i class='nav-icon fas fa-sign-out-alt'></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                ";
            } elseif ($page == "inventory") {
                echo "
               <li class='nav-item'>
                    <a href='?page=kasir' class='nav-link'>
                        <i class='nav-icon fas fa-cash-register'></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon far fa-user-circle'></i>
                        <p>
                            My Profile
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=profile' class='nav-link'>
                                <i class='fas fa-user-alt'></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link active'>
                        <i class='nav-icon fas fa-box-open'></i>
                        <p>
                            Inventory
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=productlist' class='nav-link'>
                                <i class='fas fa-box'></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-money-bill-wave'></i>
                        <p>
                            Cash Flow
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=cashin' class='nav-link'>
                                <i class='far fa-plus-square'></i>
                                <p>Add Cash-in/Cash-out</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item logout-css'>
                    <a href='php/logout.php' class='nav-link'>
                        <i class='nav-icon fas fa-sign-out-alt'></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                ";
            } elseif ($page == "cash-flow") {
                echo "
                <li class='nav-item'>
                    <a href='?page=kasir' class='nav-link'>
                        <i class='nav-icon fas fa-cash-register'></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon far fa-user-circle'></i>
                        <p>
                            My Profile
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=profile' class='nav-link'>
                                <i class='fas fa-user-alt'></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-box-open'></i>
                        <p>
                            Inventory
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=productlist' class='nav-link'>
                                <i class='fas fa-box'></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link active'>
                        <i class='nav-icon fas fa-money-bill-wave'></i>
                        <p>
                            Cash Flow
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=cashin' class='nav-link'>
                                <i class='far fa-plus-square'></i>
                                <p>Add Cash-in/Cash-out</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item logout-css'>
                    <a href='php/logout.php' class='nav-link'>
                        <i class='nav-icon fas fa-sign-out-alt'></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                ";
            }
        } else {
            echo "
                <li class='nav-item'>
                    <a href='?page=kasir' class='nav-link active'>
                        <i class='nav-icon fas fa-cash-register'></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon far fa-user-circle'></i>
                        <p>
                            My Profile
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=profile' class='nav-link'>
                                <i class='fas fa-user-alt'></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=myprofile&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-box-open'></i>
                        <p>
                            Inventory
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=productlist' class='nav-link'>
                                <i class='fas fa-box'></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=inventory&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-money-bill-wave'></i>
                        <p>
                            Cash Flow
                            <i class='right fas fa-angle-left'></i>
                        </p>
                    </a>
                    <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=cashin' class='nav-link'>
                                <i class='far fa-plus-square'></i>
                                <p>Add Cash-in/Cash-out</p>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='?page=cash-flow&tab=help' class='nav-link'>
                                <i class='far fa-question-circle'></i>
                                <p>Help</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item logout-css'>
                    <a href='php/logout.php' class='nav-link'>
                        <i class='nav-icon fas fa-sign-out-alt'></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                ";
        }
        ?>
    </ul>
</nav>