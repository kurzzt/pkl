$(document).ready(function() {
  $('#file').on('change', function() {
      var formData = new FormData();
      var file = $(this).prop('files')[0];
      formData.append('file', file);

      $.ajax({
          url: '{{ route('file.upload') }}',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
              if (data.status === true) {
                  var imageUrl = data.pathfile;

                  // Perbarui gambar di dalam div dengan ID file_uploaded
                  $('#uploaded_image').attr('src', imageUrl);
                  $('#image_link').attr('href', imageUrl);

                  // Tetapkan nilai pathfile ke input tersembunyi dengan ID file_url
                  $('#fileUrl').val(imageUrl);
              } else {
                  console.error('Error uploading file:', data.error);
              }
          },
          error: function(xhr, status, error) {
              console.error('Error uploading file:', error);
          }
      });
  });
});