<?php


    $ticker = $_POST['company_ticker'];

    // Проверка не пуст

    //echo $ticker; exit;

        echo '
                 <div  class="col-6 m-auto">


                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                      <div class="tradingview-widget-container__widget"></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                      {
                      "symbol": "'. $ticker .'",
                      "colorTheme": "dark",
                      "isTransparent": false,
                      "largeChartUrl": "",
                      "displayMode": "regular",
                      "width": "100%",
                      "height": "800",
                      "locale": "ru"
                    }
                      </script>
                    </div>
                    <!-- TradingView Widget END -->
                    
                    <!-- https://ru.tradingview.com/widget/fundamental-data/ -->


                </div> <!-- '. $ticker .' -->
              ';


        echo '
                 <div  class="col-6 m-auto">


                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                      <div class="tradingview-widget-container__widget"></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
                      {
                      "symbol": "'. $ticker .'",
                      "width": "100%",
                      "height": 650,
                      "colorTheme": "dark",
                      "isTransparent": false,
                      "locale": "ru"
                    }
                      </script>
                    </div>
                    <!-- TradingView Widget END -->
                    
                    <!-- https://ru.tradingview.com/widget/symbol-profile/ -->


                </div> <!-- '. $ticker .' -->
              ';






?>