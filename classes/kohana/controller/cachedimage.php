<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package   Modules
 * @category  Imagefly
 * @author    Fady Khalife
 * @uses      Image Module
 * 
 * Concept based on the smart-lencioni-image-resizer by Joe Lencioni
 * http://code.google.com/p/smart-lencioni-image-resizer/
 */
 
class Kohana_Controller_CachedImage extends Controller
{
    public function action_index()
    {
        $this->auto_render = FALSE;
        CachedImage::instance()->serve_file();
    }
}