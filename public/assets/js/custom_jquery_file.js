$(document).ready(function(){
    $(window).scroll(function(){

        // HOME
        if ($(document).scrollTop() > 150) {
            $(".home-body .box1 .inner").animate({
              right:'0px', opacity:'1'
            },1000);
        };
    });

    // Home Slider
      $(".slider > .slide:gt(0)").hide();

      setInterval(function() { 
        $('.slider > .slide:first')
          .fadeOut(2000)
          .next()
          .fadeIn(2000)
          .end()
          .appendTo('.slider');
      },  10000);


    // Change menu button
        $(".header .menu-button").click(function(){
            $(this).toggleClass("change");
            $(".header .mob-menu").toggleClass("show");
        });

    // Owl Carousel for Category

        var cowl = $("#category-owl");
 
        cowl.owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 6, 
          itemsDesktop : [1200,5], 
          itemsDesktopSmall : [991,4], 
          itemsTablet: [770,3], 
          itemsMobile : [480,2]
     
        });

        $("#category-owl, .header .category-drop").mouseenter(function(){
          $("#category-owl").trigger('owl.stop');
        })

        $("#category-owl, .header .category-drop").mouseleave(function(){
          $("#category-owl").trigger('owl.play',3000);
        });

    // Category Dropdown
        $(".header .bottom .list a").mouseenter(function(){
          var id = $(this).attr("id");
          var selector = ".header .bottom .category-drop#" + id;
          
          $(this).addClass("active");
          $(".header .bottom  .category-drop").removeClass("show");
          $(selector).addClass("show");
        });

        $(".header .bottom  .category-drop").mouseleave(function(){
          $(this).removeClass("show");
          $(".header .bottom .list a").removeClass("active");
        });

        $(".header .top").mouseenter(function(){
          $(".header .bottom  .category-drop").removeClass("show");
          $(".header .bottom .list a").removeClass("active");
        });

    
    // Registration Form
        $(".reg-form #student-info input, .reg-form #student-info textarea, .reg-form #student-info select").change(function(){
          var n = 0;
          $(".reg-form #student-info input ").each(function(){ /*, .reg-form #student-info textarea*/
              if ($(this).val() != "") {n += 1;};
          });
          if ($(".reg-form #student-info select").val() != null) {n += 1;};
          if (n >= 5) {
            $(".reg-form #student-info .move-btn.inactive").fadeOut(500);
            $(".reg-form #student-info .move-btn.active").fadeIn(300);
            $(".reg-form ul #lesson").removeClass("disabled");
            $(".reg-form .tab-content .error-msg").empty();
          }
          else{
            $(".reg-form #student-info .move-btn.inactive").fadeIn(300);
            $(".reg-form #student-info .move-btn.active").fadeOut(500);
            $(".reg-form ul #lesson").addClass("disabled");
          };
        });

        $(".reg-form #student-info .move-btn.active").click(function(){
          $(".reg-form ul #lesson").click();
        });

        $(".reg-form #student-info .move-btn.inactive").click(function(){
          $(".reg-form .tab-content .error-msg").html("Please, fill all fields");
        });

        $(".reg-form #lesson-info .period label").click(function(){
          if ($(this).find("input").is(':checked')) {
            $(this).siblings().find("input").prop('disabled', true);
            $(this).siblings().find("input").val("");
          }
          else {
            $(this).siblings().find("input").prop('disabled', false);
          };
        });

        $(".reg-form #lesson-info input").change(function(){
          var n = 0;
          $(".reg-form #lesson-info input[type='checkbox']").each(function(){
              if ($(this).is(':checked')) {n += 1;}
              else {n += 0;};
          });
          if (n >= 1) {
            $(".reg-form #lesson-info .move-btn.inactive").fadeOut(500);
            $(".reg-form #lesson-info .move-btn.active").fadeIn(300);
            $(".reg-form .tab-content .error-msg").empty();
          }
          else{
            $(".reg-form #lesson-info .move-btn.inactive").fadeIn(300);
            $(".reg-form #lesson-info .move-btn.active").fadeOut(500);
          };
        });

        $(".reg-form #lesson-info .move-btn.inactive").click(function(){
          $(".reg-form .tab-content .error-msg").html("Please, fill all fields");
        });
      

    // Nice Select
        $(document).ready(function() {
          $('select').niceSelect();
        });

      


      $("#otherInformation").hide();
      $(".edit").hide();
      $(".newGender").hide();
      $(".newPhone").hide();
      $(".newAddress").hide();
      $(".newCourses").hide();
      $("#doneEditing").hide();
      $("#submitProfile").hide();
      $("#uploadPhoto").hide();
      $("#icon-overlay").hide();
      // $("#explicitInformation").hide();

      $("#newHighestEducationalBackground, #newWorkExperience, #newSkillset").hide();
      

      $("#editProfile, #completeProfileButton").click(function() {
        $("#editProfile").hide();
        $("#completeProfileButton").hide(100);
        $("#otherInformation").slideDown(2000);

        $(".edit").fadeIn(1500, function() {
          $("#doneEditing").fadeIn(1000);
          $("#submitProfile").fadeIn(1000);

          $(".predefinedAddress").click(function() {
            $(this).fadeOut(1000, function() {
              $(".newAddress").fadeIn(1000);
            })
          });

          $(".predefinedGender").click(function() {
            $(".predefinedEmail").hide(100);
            $(".predefinedPhone").fadeOut(1000);
            $(this).fadeOut(1000, function() {
              $(".newPhone").fadeIn(1000, function() {
                $(".newGender").fadeIn(1000);
              });
            })
          });


          $("#editCourses").click(function() {
            $(this).fadeOut(1000, function() {
              $(".newCourses").fadeIn(1000);
            });
          });


          $("#editEducationalBackground").click(function() {
            $(this).hide(function() {
              $("#predefinedHighestEducationalBackground").slideUp(1000, function() {
                $("#newHighestEducationalBackground").slideDown(1000);
              });
            });            
          });


          $("#editWorkExperience").click(function() {
            $(this).hide(function() {
              $("#predefinedWorkExperience").fadeOut(1000, function() {
                $("#newWorkExperience").fadeIn(1000);
              });
            });            
          });


          $("#editSkillset").click(function() {
            $(this).hide(function() {
              $("#predefinedSkillset").slideUp(1000, function() {
                $("#newSkillset").slideDown(1000);
              });
            });            
          });



          $("#cameraIcon").click(function() {
            $("#uploadPhoto").click();
          });


        }); 
      });

      

   




      function camera() {
        $(".blink").slideDown(1000);
        $(".blink").slideUp(1500);
      }
      setInterval(camera, 1500);


      function camera2() {
        $(".blink2").fadeIn(1000);
        $(".blink2").fadeOut(1500);
      }
      setInterval(camera2, 1500);



      // Courses
      var maxLength = 200;
      $('textarea').keyup(function() {
        var length = $(this).val().length;
        var length = maxLength-length;
        $('#chars').text(length);
      });
      


  $("#tutorUploadPhoto").hide();

  $("#tutorUploadPhotoButton").click(function() {
    $("#tutorUploadPhoto").click();
  });


  $("#lessons").hide();
  $("#minifiedProfilePicture").hide();

  $("#viewAllLessons").click(function() {
    $("#explicitInformation").hide();
    $("#otherInformation").fadeOut(1000);
    $("#closeLessonList").show(100);
    $(this).hide(function() {
      $("#lessonNotification").fadeOut();
    });
    $("#basicInformation").fadeOut(800, function() {
      $("#profilePicture").fadeOut(800, function() {
        $("#lessons").fadeIn(800, function() {
          $("#minifiedProfilePicture").slideDown(800, function() {
            $("#lessonNotification").fadeIn(800);     
          });
        });
      });
      
    })
  });




  $("#floatLessonStatus").click(function() {
    $("#viewAllLessons").hide();
    $(this).hide(function() {
      $("#lessonNotification").fadeOut();
    });
    $("#basicInformation").fadeOut(800, function() {
      $("#profilePicture").fadeOut(800, function() {
        $("#lessons").fadeIn(800, function() {
          $("#minifiedProfilePicture").slideDown(800, function() {
            $("#lessonNotification").fadeIn(800);     
          });
        });
      });
      
    })
  });


  $("#closeLessonList").click(function() {
    $(this).hide(100, function() {
      $("#lessons").slideUp(1000);
      $("#minifiedProfilePicture").slideUp(1000, function() {
        $("#viewAllLessons").fadeIn(1000);
        $("#basicInformation").fadeIn(1000);
        $("#profilePicture").fadeIn(1000);
      });

    })
  });






  










  // To create ripple efect
  $("#completeProfileButton, #doneEditing, #tutorRegistrationSubmitButton").click(function (e) {
  
    // Remove any old one
    $(".ripple").remove();

    // Setup
    var posX = $(this).offset().left,
        posY = $(this).offset().top,
        buttonWidth = $(this).width(),
        buttonHeight =  $(this).height();
    
    // Add the element
    $(this).prepend("<span class='ripple'></span>");

    
   // Make it round!
    if(buttonWidth >= buttonHeight) {
      buttonHeight = buttonWidth;
    } else {
      buttonWidth = buttonHeight; 
    }
    
    // Get the center of the element
    var x = e.pageX - posX - buttonWidth / 2;
    var y = e.pageY - posY - buttonHeight / 2;
    
   
    // Add the ripples CSS and start the animation
    $(".ripple").css({
      width: buttonWidth,
      height: buttonHeight,
      top: y + 'px',
      left: x + 'px'
    }).addClass("rippleEffect");
  });


// $("#newHighestEducationalBackground, #newWorkExperience, #newSkillset").fadeOut(1000);

    
  $("#phaseTwo").hide();
  $("#goBack").hide();
  $("#experienceThree").hide();
  $("#experienceFour").hide();

  $("#addMoreWorkExperience").click(function() {
    $(this).fadeOut(1000);
    $("#experienceOne, #experienceTwo").slideUp(1000, function() {
      $("#experienceThree").slideDown(1000, function() {
        $("#experienceFour").slideDown(1000, function() {
          $("#goBack").show(400);
        });
      });
    })
  });



  $("#goBack").click(function() {
    $(this).fadeOut(1000);
    $("#experienceThree, #experienceFour").slideUp(1000, function() {
      $("#experienceOne").slideDown(1000, function() {
        $("#experienceTwo").slideDown(1000, function() {
          $("#addMoreWorkExperience").show(400);
        });
      });
    })
  });    
});






$("form > div > #weekDays").hide();
$("form > div > #weekDays").slideDown(7000);


$("table > tbody > tr > td > #studentDetails").click(function() {
  $("#closeLessonList").hide(100);
  $("table").fadeOut(1000, function() {
    $("#explicitInformation").fadeIn(1000);
  });
  



  $("#returnToTable").click(function() {
    $("#explicitInformation").fadeOut(1000, function() {
      $("#closeLessonList").slideDown(1000, function() {
        $("table").fadeIn(1000);
      });
    });
  });
});