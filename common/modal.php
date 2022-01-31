<!-- Using BS Modal -->
<div class="modal" tabindex="-1" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Result</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><?php settype($tovalue,'float'); if ($tovalue && is_numeric($tovalue)){ echo $tovalue.' '.ucwords(str_replace('_',' ',$to_unit)); } else{echo "Looks like you haven't entered a valid value";} ?></p>
        </div>
        <div class="modal-footer">  
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
