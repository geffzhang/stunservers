<?php
namespace Strapatsen\Controllers;

/**
 *   ________  ___________  ____  ____  _____  ___   ___        __      ________  ___________  
 *  /"       )("     _   ")("  _||_ " |(\"   \|"  \ |"  |      |" \    /"       )("     _   ") 
 * (:   \___/  )__/  \\__/ |   (  ) : ||.\\   \    |||  |      ||  |  (:   \___/  )__/  \\__/  
 *  \___  \       \\_ /    (:  |  | . )|: \.   \\  ||:  |      |:  |   \___  \       \\_ /     
 *   __/  \\      |.  |     \\ \__/ // |.  \    \. | \  |___   |.  |    __/  \\      |.  |     
 *  /" \   :)     \:  |     /\\ __ //\ |    \    \ |( \_|:  \  /\  |\  /" \   :)     \:  |     
 * (_______/       \__|    (__________) \___|\____\) \_______)(__\_|_)(_______/       \__|    
 **/

class StunServers {

    /**
     * Add New Server (local and publicly)
     ***/
    public function Add(string $url){
        $status = array();
        $safestring = htmlspecialchars($url);
        if (! StunServers::IfUrlExists($url)){
            // Add to list
        } else{
            $status = array(
                'status'=> '',
                'code' => '',
                'message' => ''
            );
        }
    }

    /**
     * Refresh lists after edits and updates
     ***/
    public function Refresh(string $url){
        // no code yet...
    }

    /**
     * Check if server already on the list 
     * return : 1 (yes), -1(no)
     ***/
    public function IfUrlExists(string $url){
    // no code yet...
    }

    /**
     * Add to your favorite list
     ***/
    public function Bookmark(string $url){
        // no code yet...
    }
    
    /**
     * Add to your favorite list
     ***/
    public function BookmarkRemove(string $url){
        // no code yet...
    }

    /**
     * Report
     ***/
    public function Report(string $url){
        // no code yet...
    }

    /**
     * Check for available updated files
     ***/
    public function Update(string $url){
        // no code yet...
    }

}
?>
