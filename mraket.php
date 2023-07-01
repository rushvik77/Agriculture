<html>
<head>
 
    <title>Practical-4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: darkslateblue;
        }
        .heading {
            text-align: center; color:rgb(255, 255, 255); text-shadow: 2px 3px 1px black;
        }
        .view {
            display: flex;justify-content: space-evenly;flex-wrap: wrap;
        }
        .interact {
            display: flex;justify-content: flex-start;align-items: center;
        }
        .search {
            display: flex;justify-content: space-evenly;
        }
        table{
            display: flex;flex-wrap: wrap;justify-content: center;
        }
        th,td {border: 1px solid black;}
        th{     min-width: 170px;        }
        .card-img-top{    height:40%,; width: 40%;   }
        .card {    margin-top: 1%; border: 2px;      }
        .qty {     width: 35px;          }
        .buynow {  margin: auto;  padding: 2%; background-color: rgb(144,238,144); color: aliceblue; color:black; }
        .prise{ margin-left: auto;}
        .card-body{min-height: 50px;}
        .rushvik{ color:black;background-color: rgb(233, 249, 255);}
        .crop{text-align: center;}
        
        
    </style>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
    <h1 class="heading"> Welcome To Agro Market </h1> <br><br>
    <div class="crop"><input type="sumbit" placeholder="Search a Product" > &nbsp; &nbsp;<button><a href=""> Search </a></button><div>
    <div class="view">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img1.jpg" />
            <div class="card-body">
                <div class="interact">
                    <h5>Hilfiger Proino Micronutrient</h5>
                    
                </div>
                <p class="card-text">
                    <ul style="margin-top: -20px;">
                        <li>Inclusive of all taxes</li>
                        <li>Pay online and get Rs. 30 Cash Discount</li>
                        <li>Pay 10% advance and get delivery</li>
                    </ul>
                    </p>
                <div class="interact"><h5 class="prise">Price:500₹</h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('Hilfiger Proino ',500,quantity1)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img2.jpg" />
            <div class="card-body">
                <div class="interact">
                    <h5>Iris Hybrid Vegetable Okra Seeds</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>No. of seeds- 15
                        Seasonal Information: All Season
                        Time till harvest: 6-7 weeks </li>
                    <li>Where to grow: Balcony or Terrace</li>
                        <li>FREE Delivery!.</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:300₹</h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('Okra Seeds',300)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img.png" />
            <div class="card-body">
                <div class="interact">
                    <h5>Hybrid Seeds Green Shimla Mirch.</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>Good Stay greenness </li>
                    <li>FRUIT SIZE: Length 10-11 cm and Weight 150 - 180 gm. </li>
                    <li>QUANTITY : 100-120 gm / Acre Approx.</li>  
                                
                 </ul>
                </p>
                <div class="interact"><h5 class="prise">Price:99₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('Shimla Mirch',99)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img6.jpg" />
            <div class="card-body">
                <div class="interact">
                    <h5>SAAHO TO 3251 TOMATO SEEDS</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>Good Stay greenness </li>
                    <li>Shape- Flat Round type, uniform green</li>
                    <li> Yield- Average yield: 25-40 MT/acre ( depending on season and cultural practice).</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:312₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('TOMATO SEEDS',312)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img5" />
            <div class="card-body">
                <div class="interact">
                    <h5>SARPAN CHILLI BAJJI KAI SEEDS</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>SHAPE/ SIZE: Length: 8 - 11 cms, Width: 2.5 - 3 cms  </li>
                    <li>HARVESTING: First Harvest - 55-60 days</li>
                    <li> Good Keeping quality.</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:120₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('SARPAN CHILLI',120)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div> <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=" image/Market/vegetable-seeds-superex-onion-f1-1_160x.avif" />
            <div class="card-body">
                <div class="interact">
                    <h5>SUPEREX ONION F1</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>Type : Short Day  </li>
                    <li>Bulb Shape : Granex,Bulb Weight (gr) : 200</li>
                    <li> Bulb Skin Color : Brown-Yellow.</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:200₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('ONION F1',200)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div> <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/REDCABBAGEHYBRID-REDBALL_66f488cd-5523-4d7d-87b0-af805e766f2b_120x.webp" />
            <div class="card-body">
                <div class="interact">
                    <h5>IRIS HYBRID RED CABBAGE SEEDS</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>Light- Partial Sunlight (Summer), Full Sunlight (Winter)  </li>
                   
                    <li> Seasonal Information- All Seasons.</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:250₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart('CABBAGE SEEDS',250)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div> <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="image/Market/img4" />
            <div class="card-body">
                <div class="interact">
                    <h5>SUGAR SUMMER MUSK MELON SEEDS</h5>
                    
                </div>
                <p class="card-text"><ul style="margin-top: -20px;">
                    <li>GROWING CONDITION: Prepare the bed.
                        REQUIERED FERTILIZER: Test fertilizes</li>
                    <li>GERMINATION RATE: 80 to 90 %</li>
                </ul></p>
                <div class="interact"><h5 class="prise">Price:160₹ </h5>
                    <input class="buynow" type="button" ng-click="addItemToCart(' MUSK MELON SEEDS',160)"
                        value="Add to 🛒" />
                </div>
            </div>
        </div>
    </div>
    <hr style="height: 12px;background: black;">
    <h1 class="heading">Chcek Out  </h1>
    <div ng-view>
        <table align="center" class="heading">
            <tr align="center">
                <th>Course Name</th>
                <th>Course Prise </th>
                <th>Subtotal</th>
                <th>Remove</th>
            </tr>
            <tr ng-repeat="item in shoppingCart" align="center">
                <td>{{item.name}}</td>
                <td>{{item.value}}</td>
                <!-- Sub-Total Logic -->
                <td>{{item.value}}</td>
                <td><button ng-click="removeItemFromCart($index)" class="rushvik">Remove</button></td>
            </tr>
        </table>
        <div style="display: flex;flex-wrap: wrap;justify-content: center;">
            <h2 style="margin-top: 20px;" class="heading">Total: {{calculateTotal()}}</h2>
            <button style="margin: 20px 0 0 50px;" class="rushvik"><a href="index.php"> Confirom Order</a> </button>
        </div>
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function ($scope) {
            $scope.shoppingCart = [];
            //function to add item to cart
            $scope.addItemToCart = function (itemName, itemValue) {
                // creating object to add items in array in 2dimensional form
                var item = {
                    name: itemName,
                    value: itemValue,
                };
                // adding item to array
                $scope.shoppingCart.push(item);
            };
            //removing item from list
            $scope.removeItemFromCart = function(index) {
                 $scope.shoppingCart.splice(index, 1);
            };
            //calculating total of items
            $scope.calculateTotal = function () {
                var total = 0;
                for (var i = 0; i < $scope.shoppingCart.length; i++) {
                    total += $scope.shoppingCart[i].value;
                }    return total;
            };
        });     
    </script>
</body>
</html>