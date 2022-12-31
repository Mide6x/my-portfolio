// Get a reference to the footer container
var footerContainer = document.querySelector('#footer-container');

// Retrieve the footer HTML
fetch('components/footer.html')
  .then(response => response.text())
  .then(html => {
    // Insert the footer HTML into the footer container
    footerContainer.innerHTML = html;
  });
