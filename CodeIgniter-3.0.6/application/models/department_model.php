<?php
class department_model extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //fetch department details from database
    function get_department_list()
    {
        $sql = 'select department_name, employee_name from tbl_department, tbl_employee where tbl_department.department_id = tbl_employee.employee_id ';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>