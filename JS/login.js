// Function to show the toast message with the error message
function showToast(errorMessage) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = errorMessage;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
      console.log("toast active")
    }, 3000);
  }
  
  // Check if the login attempt failed
  const urlParams = new URLSearchParams(window.location.search);
  const errorMessage = urlParams.get('error_message');
  if (errorMessage) {
    showToast(errorMessage);
    console.log("error worked")
  }
  