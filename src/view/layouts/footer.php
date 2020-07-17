
    </div>


                                                <!-- Tab Bar Mobile -->
    <div class="tab-bottom-bar">
        <a href="#" class="tab-menu-item tab-current"><i class="fas fa-home"></i></a>
        <a class="tab-nav-indicator"></a>
        <a href="#" class="tab-menu-item"><i class="fas fa-book-reader"></i></a>
        <a href="#" class="tab-menu-item"><i class="fas fa-user-tie"></i></a>
        <a href="#" class="tab-menu-item"><i class="fas fa-at"></i></a>
    </div>

    <footer>
        <div class="container-footer">
            <?php if (defined('DEBUG_TIME')): ?>
                Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME))?> ms
            <?php endif ?>
        </div>
    </footer>

    <script src="js/TabBar.js"></script>
    </body>
</html>
