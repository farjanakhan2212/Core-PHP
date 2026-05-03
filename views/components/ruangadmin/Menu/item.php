<li class="nav-item">
    <a class="nav-link collapsed" href="<?= $arg["route"] ?>" data-toggle="collapse" data-target="#<?= $arg["id"] ?>"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="<?= $arg["icon"] ?>"></i>
        <span><?= $arg["name"] ?></span>
    </a>
    <?php if (isset($arg["links"])) { ?>
        <div id="<?= $arg["id"] ?>" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <?php foreach ($arg["links"] as $link) { ?>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $base_url ?>/<?= $link["route"] ?>"><?= $link["text"] ?></a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</li>