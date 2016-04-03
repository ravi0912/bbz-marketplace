
<div>
    <!--nav bar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><img src="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_white.svg" alt="0" height="50" width="50" style="margin-top: -15px"/></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav_item">
                    <div class="nav_item_right">
                        <form action="#" class="form-group">
                            <input type="text" value="search" class="form-control"/>
                        </form>
                    </div>
                </li>
                <li class="dropdown nav_item">
                    <div class="nav_item_right">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons" id="settings" style="color:#fff;margin-top:4px">settings</i>
                        </div>
                        <ul class="dropdown-menu" role="settings_menu" aria-labelledby="menu">
                            <li role="presentation"><a href="#" role="menu-item">item1</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item2</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item3</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item4</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav_item">
                    <div style="color:#fff;font-size:15px;font-weight:bold;margin-top:2px" class="nav_item_right">Vishwas Vyas</div>
                </li>
                <li class="dropdown nav_item">
                    <div class="nav_item_right">
                        <div data-toggle="dropdown" class="dropdown-toggle"><img src="images/baby.jpg" alt="user id" style="height:40px;width:40px;border-radius:100%;margin-top:-2px"/>
                        </div>
                        <ul class="dropdown-menu" role="logout_menu" aria-labelledby="menu">
                            <li role="presentation"><a href="#" role="menu-item">Profile</a></li>
                            <li role="presentation"><a href="#" role="menu-item">Connection</a></li>
                            <li role="presentation"><a href="#" role="menu-item">Change Password</a></li>
                            <hr>
                            <li role="presentation"><a href="#" role="menu-item">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>



@include ('partials.left_overlap')