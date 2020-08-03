<?php


    $tickets = Array(
        "NASDAQ:AAPL"  , "NASDAQ:MSFT",
        "NASDAQ:GOOGL" , "NYSE:ORCL",
        "NASDAQ:TSLA"  , "NYSE:MCD",
        "NYSE:BRK.B"   , "NYSE:KO",
        "NYSE:V"       , "NYSE:MA",
        "NASDAQ:YNDX"  , "NASDAQ:AMZN",
        "NASDAQ:FB"    , "NASDAQ:NVDA",
        "NASDAQ:PYPL"  , "NASDAQ:NFLX"
    );


    foreach( $tickets as $one )
    {

        echo '
                 <div  class="col-6 m-auto">

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container m-auto">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                            {
                                "symbol": "'. $one .'",
                                "width": "100%",
                                "locale": "ru",
                                "colorTheme": "dark",
                                "isTransparent": false
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div> <!-- '. $one .' -->
              ';

    }


?>