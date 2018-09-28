
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <footer>
      <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
          <div class="navbar-collapse collapse" id="footer">
            <i>BeardBros</i> &copy; <?php
            $copyYear = 2018; // Set website start date
            $curYear = date('Y'); // Keeps the second year updated
            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> Copyright.
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
