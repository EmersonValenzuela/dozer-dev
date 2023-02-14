<?php
$this->db->where('message_thread.receiver', $this->session->userdata('user_id'));
$this->db->where('message.sender !=', $this->session->userdata('user_id'));
$this->db->where('message.read_status', 0);
$this->db->from('message_thread');
$this->db->join('message', 'message_thread.message_thread_code = message.message_thread_code');
$unreaded_message = $this->db->get()->num_rows();
?>

