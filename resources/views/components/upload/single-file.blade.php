<div for="file">{{ $label }}</div>

<input type="file" class="file-input file-input-bordered w-full" id="file_submit" name="file_submit"/>

{{-- hidden value --}}
<input type="hidden" value="{{$imgPreview}}" name="{{ $name }}" id="{{ $name }}">

<div id="file_uploaded" class="w-[200px] bg-clip-content hover:bg-opacity-60">
  <a id="image_link" href="{{$imgPreview}}" target="_blank" class="hover:bg-opacity-60">
    <img id="uploaded_image" class="rounded-md" src="{{$imgPreview}}" alt="">
  </a>  
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#file_submit').on('change', function() {
    var formData = new FormData();
    var file = $(this).prop('files')[0];
    formData.append('file', file);
    
    // Take submit Button innerHTML
    var submitBtn = $(this).closest('form').find('button[type="submit"]');
    var originalHtml = submitBtn.html();
    
    // Disable it and give spinner
    submitBtn.prop('disabled', true);
    submitBtn.html('<span class="loading loading-spinner"></span>');

    $.ajax({
      url: '{{ route('file.upload') }}',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(data) {
        if (data.status === true) {
          var imageUrl = data.pathfile;

          $('#uploaded_image').attr('src', imageUrl);
          $('#image_link').attr('href', imageUrl);

          $('#{{ $name }}').val(imageUrl);
          
          // Enable it and give the original innerHMTL value back
          submitBtn.prop('disabled', false);
          submitBtn.html(originalHtml);
          
          console.log(data);
        } else {
          console.error('Error uploading file:', data.error);
          
          // Enable it and give the original innerHMTL value back
          submitBtn.prop('disabled', false);
          submitBtn.html(originalHtml);
        }
      },
      error: function(xhr, status, error) {
        console.error('Error uploading file:', error);
        
        // Enable it and give the original innerHMTL value back
        submitBtn.prop('disabled', false);
        submitBtn.html(originalHtml);
      }
    });
  });
});
</script>