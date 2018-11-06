// JavaScript Document

      jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: false,                                    
                $AutoPlaySteps: 4,                                
                $AutoPlayInterval: 5000,                          
                $PauseOnHover: 1,                               

                $ArrowKeyNavigation: true,   			           
                $SlideDuration: 300,                                
                $MinDragOffsetToSlide: 20,                         
                $SlideWidth: 180,                                   
                //$SlideHeight: 150,                                
                $SlideSpacing: 15, 					               
                $DisplayPieces: 5,                                  
                $ParkingPosition: 0,                              
                $UISearchMode: 1,                                   
                $PlayOrientation: 1,                               
                $DragOrientation: 1,                                

                $BulletNavigatorOptions: {                                
                    $Class: $JssorBulletNavigator$,                      
                    $ChanceToShow: 2,                               
                    $AutoCenter: 0,                                
                    $Steps: 1,                                     
                    $Lanes: 1,                                      
                    $SpacingX: 0,                                  
                    $SpacingY: 0,                                   
                    $Orientation: 1                                 
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,             
                    $ChanceToShow: 1,                              
                    $AutoCenter: 2,                              
                    $Steps: 4                                      
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth,960));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }

        });