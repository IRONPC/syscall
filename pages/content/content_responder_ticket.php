<a data-toggle="modal" href="#FAQ-modal"></a> 
<div ng-controller="FAQController">
    <div class="modal fade" tabindex="-1" role="dialog" id="FAQ-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div align="center" ng-include="'partials/FAQ-modal.html'">
                    <?php echo $vx = $_GET['id']; ?>
                </div>                
            </div>
        </div>
    </div>