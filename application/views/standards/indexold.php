<h3>Management System Standards Framework Toolkit<h3>
<div class="standardsover">
    <?php if (!empty($standards)) {?>
        <?php foreach($standards as $standard) {?>
            <?php foreach($standard['sections'] as $section) {?>
                <div class="tenth">
                    <div class="card">
                        <div class="card-body">
                            <?=$section['sectionNumber'] . " " . $section['sectionTitle'];?>
                        </div>
                    </div>
                    <?php foreach($section['subsections'] as $subsection) {?>
                        <div class="card">
                            <div class="card-body">
                                <?=$subsection['subsectionNumber'];?>
                            </div>
                        </div>
                        <?php foreach($subsection['subsubsections'] as $subsubsection) {?>
                            <div class="card">
                                <div class="card-body">
                                    <?=$subsection['subsectionNumber'] . "." . $subsubsection['subsubsectionNumber'];?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>