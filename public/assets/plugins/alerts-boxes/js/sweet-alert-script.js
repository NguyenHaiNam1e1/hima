
 $(document).ready(function(){

              $("#alert-basic").click(function(){
                  swal("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis");
              });

              $("#alert-title").click(function(){
                  swal("Here's the title!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis");
              });

              $("#alert-success").click(function(){
                  swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success");
              });

              $("#alert-error").click(function(){
                  swal("Somthing Wrong!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis,", "error");
              });

              $("#alert-info").click(function(){
                  swal("Information!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis,", "info");
              });

              $("#alert-warning").click(function(){
                  swal("Warning!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis,", "warning");
              });


              $("#confirm-btn-alert").click(function(){

                  swal({
                    title: "Bạn chắc chứ?",
                    text: "bạn click vào oke dòng dữ liệu này sẽ bị xóa!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      swal("xóa thành công!", {
                        icon: "success",
                      });
                    }
                     else {
                      swal("dòng dữ liệu của bạn đã an toàn!");
                    }
                  });

              });

          });