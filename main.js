'use strict'
/*
	của nakbar
*/

// Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
/*
    END	của nakbar
*/
//----------------------------------------------------------------------------------------------
/*
	của nakbar
*/
//chức năng tải avatar
function chooseFile(fileInput){
    if (fileInput.files && fileInput.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            $('#image').attr('src', e.target.result);            
        }
        reader.readAsDataURL(fileInput.files[0]);
    }
}
/*
    End của nakbar
*/

//----------------------------------------------------------------------------------------------
/*
 Phần code của CreateTask
*/
// Viết code Jquery 
 
    // Yêu cầu JQUERY UI thay thế INPUT text có id="txtNgayThangNamSinh" thành công cụ chọn ngày tháng Date Picker
$('#txtNgayThangNamSinh').datepicker(
    {
    //showButtonPanel: true,    // option hiển thị nút "Today", "Done"
    //dateFormat: 'dd/mm/yy'    // option Định dạng format ngày tháng; d: Day Ngày; m: Month tháng; y: Year năm
    }
);
 
// <!-- Phần xử lý code JavaScript - END -->
/*
    END của CreateTask
*/
//----------------------------------------------------------------------------------------------
  /*
 Phần code của TaskManager
*/
// Chức năng thêm file
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
// <!-- Phần xử lý code JavaScript - END -->
/*
    END của CreateTask
*/
//----------------------------------------------------------------------------------------------
