<?php
/*
*  
* --------------------------------------------------------------------
*  视图布局类
* --------------------------------------------------------------------
*
*  @authors ekin.cen <weibo.com/2839892994>
*  
*/
class Layout{

    public $obj;
    public $disable_layout = FALSE;
    protected $_layout;
    protected $_layout_dir = 'layout';
    protected $_template_dir = 'templates';
    protected $_data = array();

    public function __construct()
    {
        $this->obj = &get_instance();
    }

    public function set_layout($layout)
    {

        $this->_layout = $layout;
        return $this;
    }

    public function set_layout_dir($dirname)
    {
        $this->_layout_dir = $dirname;
        return $this;
    }

    public function set_template_dir($dirname)
    {
        $this->_template_dir = $dirname;
        return $this;
    }

    public function view($view, $data = NULL, $return = FALSE)
    {
        $view = $this->_template_dir . DIRECTORY_SEPARATOR . $view;
        $this->_layout = $this->_layout_dir . DIRECTORY_SEPARATOR . $this->_layout;

        if ($this->_data)
        {
            $data = $data ? array_merge($this->_data, $data) : $this->_data;
        }
        if ($this->disable_layout)
        {
            echo $this->obj->load->view($view, $data, TRUE);
        }
        else
        {
            $data = array('TEMPLATE_CONTENT' => $this->obj->load->view($view, $data, TRUE));
            $this->obj->load->view($this->_layout,$data,$return);
        }
    }

    public function assign($key, $value = null)
    {
        $data = is_array($key) ? $key : array($key => $value);
        $this->_data = array_merge($data, $this->_data);
        return $this;
    }
}
/* End of file */
 