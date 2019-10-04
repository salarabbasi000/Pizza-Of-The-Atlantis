<section id="cart">
        <div class="container-fluid">
            <div class="cart-content" ng-app="cart" ng-controller="control">
                <div class="cart-close cart-trigger"><i class="fa fa-close"></i></div>
                <div class="border-lines-container">
                    <h1 class="no-top-margin border-lines">Cart</h1>
                </div>

                <form action="delivery.php" method="post">
                    <!-- <input type="text" name="" ng-model="xyz">
                    <p ng-bind="xyz"></p> -->
                    <!-- <?php $x; ?> -->
                    <?php
                    /*var_dump($_SESSION['order']);*/
                    //$c='a';
                    for($i=0;$i<count($_SESSION['order']);$i++)
                    {
                        if($_SESSION['order'][$i]['type']=='pizza' || $_SESSION['order'][$i]['type']=='breverage')
                        {
                    ?>
                    <div class="row">                 
                       <div class="col-md-6"><h6><?php echo $_SESSION['order'][$i]['name'];?><br>(<?php echo $_SESSION['order'][$i]['size'];?>)</h6></div>
                       <div class="col-md-3"><span>Quantity: <input type="number" required ng-value="v" name="quantity<?php echo $i;?>" min="1" ng-model="<?php echo "model".$i;?>"></span></div>
                       <div class="col-md-3" >Price:<br>PKR.{{<?php echo "model".$i;?>*<?php echo $_SESSION['order'][$i]['price'];?>}}</div>
                    </div>
                    <?php
                        }
                        else if($_SESSION['order'][$i]['type']=='starter')
                        {
                    ?>
                    <div class="row"> 
                        <div class="col-md-6"><h6><?php echo $_SESSION['order'][$i]['name'];?><br>(<?php echo $_SESSION['order'][$i]['pieces_or_servings'];?> Pieces/Serving)</h6></div>
                       <div class="col-md-3"><span>Quantity: <input type="number" required ng-value="v" name="quantity<?php echo $i;?>" min="1" ng-model="<?php echo "model".$i;?>"></span></div>
                       <div class="col-md-3" >Price:<br>PKR.{{<?php echo "model".$i;?>*<?php echo $_SESSION['order'][$i]['price'];?>}}</div>
                    </div>
                    <?php
                        }
                    }
                    ?>  
                    <br>
                    <?php

                    function total()
                    {

                        $x="";
                        for($v=0;$v<count($_SESSION['order']);$v++)
                        $x.=("model".$v."*".$_SESSION['order'][$v]['price']."+");
                        $x.=0;
                        return $x;
                    }
                    ?>
                    <hr>
                    <p class="text-right text-bigger">Total: PKR.{{<?php echo total(); ?>}}</p>
                    <div class="row text-xs-center">
                        <div class="col-sm-6">
                            <input class="button-yellow button-text-low button-long button-low" type="submit" value="Proceed To Delivery" name="proceed">
                        </div>
                        <!-- <div class="col-sm-6 text-right text-xs-center">
                            <div class="margin-15"></div>
                            <a href="delivery.php" class="button-yellow button-text-low button-long button-low scroll-to cart-trigger">Delivery</a>
                        </div> -->
                    </div>
                </form>
            </div><!-- .cart-content -->
        </div><!-- .container -->
    </section><!-- #cart -->

    <script type="text/javascript">
        var cartapp=angular.module("cart",[]);
        cartapp.controller("control",function($scope){
            $scope.v=1;
        });
    </script>