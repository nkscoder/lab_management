<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acl_permission_model extends CI_Model {

  /**
   * Get all permissions, used for Admin Panel
   *
   * @access public
   * @return object all permission details
   */
  function get()
  {
    return $this->db->get('acl_permission')->result();
  }

  // --------------------------------------------------------------------

  /**
   * Get a single permission by id
   *
   * @access public
   * @return object permission details
   */
  function get_by_id($id)
  {
    return $this->db->get_where('acl_permission', array('id' => $id))->row();
  }

  // --------------------------------------------------------------------

  /**
   * Get active permissions associated with an account
   *
   * @access public
   * @param string $account_id
   * @return object account permissions
   */
  function get_by_account_id($account_id)
  {
    $this->db->select('acl_permission.*');
    $this->db->from('acl_permission');
    $this->db->join('rel_role_permission', 'acl_permission.id = rel_role_permission.permission_id');
    $this->db->join('rel_account_role', 'rel_role_permission.role_id = rel_account_role.role_id');
    $this->db->where("rel_account_role.account_id = $account_id AND acl_permission.suspendedon IS NULL");
    
    return $this->db->get()->result();
  }

  // --------------------------------------------------------------------

  /**
   * Get permission by name
   * @param string $permission_name
   * @access public
   * 
   * @return object permission details
   */
  function get_by_name($permission_name)
  {
    return $this->db->get_where('acl_permission', array('key' => $permission_name))->row();
  }

  // --------------------------------------------------------------------

  /**
   * Check if the account has a specific permission
   *
   * @access public
   * @param string $permission_key
   * @param string $account_id
   * @return object account permissions
   */
  function has_permission($permission_key, $account_id)
  {
    $this->db->select('acl_permission.*');
    $this->db->from('acl_permission');
    $this->db->join('rel_role_permission', 'acl_permission.id = rel_role_permission.permission_id');
    $this->db->join('rel_account_role', 'rel_role_permission.role_id = rel_account_role.role_id');
    $this->db->where("rel_account_role.account_id = $account_id AND acl_permission.suspendedon IS NULL AND acl_permission.key = $permission_key");

    return ($this->db->count_all_results() > 0);
  }

  // --------------------------------------------------------------------
  
  /**
   * Update permission details
   *
   * @access public
   * @param int $permission_id
   * @param array $attributes
   * @return integer permission id
   */
  function update($permission_id, $attributes = array())
  {
    // Update
    if ($this->get_by_id($permission_id))
    {
      $this->db->where('id', $permission_id);
      $this->db->update('acl_permission', $attributes);
    }
    // Insert
    else
    {
      $this->db->insert('acl_permission', $attributes);
      $permission_id = $this->db->insert_id();
    }

    return $permission_id;
  }

  // --------------------------------------------------------------------

  /**
   * Update permission suspended datetime
   *
   * @access public
   * @param int $permission_id
   * @return void
   */
  function update_suspended_datetime($permission_id)
  {
    $this->load->helper('date');

    $this->db->update('acl_permission', array('suspendedon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $permission_id));
  }

  // --------------------------------------------------------------------
  
  /**
   * Remove permission suspended datetime
   *
   * @access public
   * @param int $permission_id
   * @return void
   */
  function remove_suspended_datetime($permission_id)
  {
    $this->db->update('acl_permission', array('suspendedon' => NULL), array('id' => $permission_id));
  }

  // --------------------------------------------------------------------

  /**
   * Delete permission details
   *
   * @access public
   * @param int $permission_id
   * @return void
   */
  function delete($permission_id)
  {
    $this->db->delete('acl_permission', array('id' => $permission_id));
  }
}