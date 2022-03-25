<?php include_once APPROOT . '/views/includes/topnav.php'; ?>


<link rel='stylesheet' href="<?php echo URLROOT;?>/public/css/home/faq.css"/>


        <!-- FAQ -->
        <div class="container">
          	<div class="fluid-container">
          		<center>
                    <p style="margin: 1em; font-size: 2em; margin-top:5em"> 
                        <b><span style="color: #e0ac1c; font-size: 2em">F</span>requently <span style="color: #e0ac1c; font-size: 2em">A</span>sked <span style="color: #e0ac1c; font-size: 2em">Q</span>uestions</b>	
                    </p>
                </center>
          	    
                <table cellspacing="30">
                    <tr>
                        <!-- 1 -->
                        <th>
                            <center>
                            <?php foreach($data['faq'] as $faq): ?>
                                <div class="accordian">
                                    <div class="icon">
                                    </div>
                                    <center>
                                        <h4><?php echo $faq->question; ?><br><br></h4>
                                    </center>
                                </div>
                                <div class="panel">
                                    <p><?php echo $faq->answer; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </center>
                        </th>
                    </tr>
        
                </table>

                <script >
                    var acc = document.getElementsByClassName('accordian');
                    var i;
                    var len = acc.length;
          		    for(i=0; i<len; i++) {
          		        acc[i].addEventListener('click', 
                            function() {
          				        this.classList.toggle('active');
          				        var panel = this.nextElementSibling;
          				        if(panel.style.maxHeight) {
          					        panel.style.maxHeight = null;
          				        } else{
          					        panel.style.maxHeight = panel.scrollHeight + 'px';
          				        }
          		            }
                        );
          		    }
                </script>
            </div>
        </div>



<?php include_once APPROOT . '/views/includes/footer.php'; ?>