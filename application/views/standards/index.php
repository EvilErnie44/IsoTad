<div class="clearfix">
    <h2>Management System Standards Framework Toolkit</h2>
    <div class="standardsover">
        <?php if (!empty($standards)) {?>
            <?php foreach($standards as $standard) {?>
                <?php foreach($standard['sections'] as $section) {?>
                    <div class="tenth">
                        <div class="sectblock ">
                            <div class="sectblock-body
                            <?php
                                if($section['sectionNumber']==1)
                                {
                                    echo " blockgrey";
                                }
                                if($section['sectionNumber']==2)
                                {
                                    echo " blockred";
                                }
                                if($section['sectionNumber']==3)
                                {
                                    echo " blockblack";
                                }
                            ?>
                       ">
                                <?=$section['sectionNumber'] . " " . $section['sectionTitle'];?>
                            </div>
                            <?php foreach($section['subsections'] as $subsection) {?>
                                <div class="sectblock-body
                            <?php
                                if($section['sectionNumber']==1)
                                {
                                    echo " blockgrey";
                                }
                                if($section['sectionNumber']==2)
                                {
                                    echo " blockred";
                                }
                                if($section['sectionNumber']==3)
                                {
                                    echo " blockblack";
                                }
                            ?>
                       ">
                                    <?=$subsection['subsectionNumber'];?>
                                </div>
                                <?php foreach($subsection['subsubsections'] as $subsubsection) {?>
                                    <div class="sectblock-body
                            <?php
                                if($section['sectionNumber']==1)
                                {
                                    echo " blockgrey";
                                }
                                if($section['sectionNumber']==2)
                                {
                                    echo " blockred";
                                }
                                if($section['sectionNumber']==3)
                                {
                                    echo " blockblack";
                                }
                            ?>
                       ">
                                        <?=$subsection['subsectionNumber'] . "." . $subsubsection['subsubsectionNumber'];?>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>