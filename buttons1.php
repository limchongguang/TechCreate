<!--<div class="cotnainer-fluid d-flex justify-content-center align-items-center sizepadding2">
  <a href="#" class="btn-custom4">&laquo; Previous</a>&nbsp;&nbsp;&nbsp;
  <a href="#" class="btn-custom4">Overview</a>&nbsp;&nbsp;&nbsp;
  <a href="#" class="btn-custom4">&nbsp;&nbsp;Next &raquo;&nbsp;&nbsp;</a>
</div>-->
<div class="cotnainer-fluid d-flex justify-content-center align-items-center sizepadding2">
  <a id="previousPageBtn" class="btn-custom4">&laquo;Previous Page</a>&nbsp;&nbsp;
  <a href="#" class="btn-custom4">Overview</a>&nbsp;&nbsp;
  <a id="nextPageBtn" class="btn-custom4">Next Page&raquo;</a>
</div>
<script>
 var pageUrls = [
    'digitalAccelerator.php',
    'merger.php',
    'maintenance.php',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#'
  ];
  var currentPageIndex = pageUrls.findIndex(function(url) {
    return window.location.href.endsWith(url);});

  var previousPageBtn = document.getElementById('previousPageBtn');
  var nextPageBtn = document.getElementById('nextPageBtn');

  previousPageBtn.addEventListener('click', function() {
    currentPageIndex = (currentPageIndex - 1 + pageUrls.length) % pageUrls.length;
    window.location.href = pageUrls[currentPageIndex];
  });

  nextPageBtn.addEventListener('click', function() {
    currentPageIndex = (currentPageIndex + 1) % pageUrls.length;
    window.location.href = pageUrls[currentPageIndex];
  });

  // Function to update button visibility
  function updateButtonVisibility() {
    previousPageBtn.style.display = (currentPageIndex === 0 || currentPageIndex === -1) ? 'none' : 'inline-block';
    nextPageBtn.style.display = (currentPageIndex === pageUrls.length - 1 || currentPageIndex === -1) ? 'none' : 'inline-block';
  }

  // Initial button visibility
  updateButtonVisibility();
</script>
