<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
 
<section class="section noBanner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Search</h4>
                <p>Home > Search Result > Showing <?php echo count($this->core->search()); ?> for “<?php echo $this->input->get('q'); ?>”</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                foreach ($this->core->search() as $row) {
                ?>
                    <div>
                    <small><a href="<?php echo $row['url']; ?>" class="search-url text-dark"><?php echo $row['url']; ?></a></small>
                    </div>

                    <div> <a href="<?php echo $row['url']; ?>" class="search-title"><b><?php echo $row['name']; ?></b></a></div>
                    <p><?php echo $row['content']; ?></p>
                    <hr>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>