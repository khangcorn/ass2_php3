document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('myModal');
    var btn = document.getElementById('myBtn');
    var form = document.querySelector('form');
    var select = document.getElementById('select');
    var span = document.getElementsByClassName('close')[0];
    var btnCt = document.querySelector('.add_category');
    var categoryCreateUrl = "{{ url('/categories') }}";
    // Show modal
    btn.onclick = function () {
        modal.style.display = 'block';
    };

    // Close modal
    span.onclick = function () {
        modal.style.display = 'none';
    };

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };


    form.onsubmit = function (e) {
        e.preventDefault();
        if (select.value === "") {
            alert('Please select a role.');
        }
    }



    // Handle form submission


    // form.onsubmit = function(event) {
    //   event.preventDefault(); // Prevent default form submission

    //   var formData = new FormData(form);

    //   $.ajax({
    //       type: "POST",
    //       url: categoryCreateUrl,
    //       data: formData,
    //       processData: false, // Important: do not process the data
    //       contentType: false, // Important: do not set content type
    //       headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       },
    //       success: function(response) {
    //           if (response.status == 400) {
    //               // Display validation errors
    //               $('#nameError').text(response.errors.name ? response.errors.name[0] : '');
    //               $('#descriptionError').text(response.errors.description ? response.errors.description[0] : '');
    //           } else {
    //               // Success handling
    //               alert(response.message);
    //               modal.style.display = 'none';
    //               form.reset();
    //               location.reload(); // Optionally reload to update the category list
    //           }
    //       },
    //       error: function(xhr) {
    //           console.error('AJAX Error:', xhr.responseText);
    //       }
    //   });


    // }


});
