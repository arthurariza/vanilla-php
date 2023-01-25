<?php require "partials/head.php" ?>

<?php require "partials/navbar.php" ?>

<?php require "partials/header.php" ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <h2>Posts:</h2>

        <ul>
          <?php foreach ($posts as $post): ?>
            <li><?= $post['title'] ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- /End replace -->
    </div>
  </main>

<?php require "partials/footer.php"; ?>
