document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form');

  form.addEventListener('submit', async function (event) {
      event.preventDefault();

      const formData = new FormData(form);
      const fileInput = document.getElementById('file');
      const file = fileInput.files[0];

      formData.delete('file'); // Hapus file dari FormData

      try {
          // Kirim file ke FileUploaderController
          const fileResponse = await fetch('/upload', {
              method: 'POST',
              body: new FormData().append('file', file),
          });

          if (!fileResponse.ok) {
              throw new Error('Failed to upload file');
          }

          const fileData = await fileResponse.json();
          const pathfile = fileData.pathfile;

          // Tambahkan pathfile ke FormData
          formData.append('pathfile', pathfile);

          // Kirim sisa input ke route retributions.store
          const response = await fetch(form.action, {
              method: 'POST',
              body: formData,
          });

          if (!response.ok) {
              throw new Error('Failed to submit form');
          }

          // Redirect atau lakukan tindakan lain sesuai kebutuhan
          window.location.href = '{{ route("retributions.index") }}';
      } catch (error) {
          console.error(error);
          // Tampilkan pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan
      }
  });
});