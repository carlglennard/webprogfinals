//TIME FUNCTIONALITY

// Update the footer with the current date and time
function updateFooterDateTime() {
    const clockElement = document.getElementById('clock');
    
    updateClock(); // Display initial clock value
    setInterval(updateClock, 1000); // Update clock every second
  }
  
  // Update the clock display
  function updateClock() {
    const clockElement = document.getElementById('clock');
    const date = new Date();
    
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();
    
    clockElement.textContent = `${formatTime(hours)}:${formatTime(minutes)}:${formatTime(seconds)}`;
  }
  
  // Add leading zero to single-digit numbers
  function formatTime(time) {
    return time < 10 ? `0${time}` : time;
  }
  
  // Call the updateFooterDateTime function when the page finishes loading
  window.addEventListener('load', updateFooterDateTime);

  //BUTTON TRIGGER FUNCTIONALITY

  // Function to toggle the "pressed" class on the navbar buttons
function togglePressedClass(event) {
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => link.classList.remove('pressed'));
    event.target.classList.add('pressed');
  }
  
  // Attach click event listeners to navbar buttons
  function attachEventListeners() {
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
      link.addEventListener('click', togglePressedClass);
    });
  }
  
  // Call the attachEventListeners function when the page finishes loading
  window.addEventListener('load', attachEventListeners);