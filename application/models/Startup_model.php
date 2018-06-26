<?php
   class Startup_model extends CI_Model{
      public function __construct(){
         $this->load->database();
      }

      public function market_turn(){
        $this->db->where('type', "buy");
        $this->db->where('order_status_id', 1);
        $query = $this->db->get('orders');
        $buyingorders = $query->result_array();

        if(count($buyingorders) > 0){
          foreach ($buyingorders as $buyingorder) {
            $this->db->where('cid', $buyingorder['cid']);
            $query = $this->db->get('company');
            $companyshare1 = $query->row_array();

            $this->db->where('amount >=', $companyshare1['c_current_share_value']);
            $this->db->where('type', "buy");
            $query = $this->db->get('orders');
            $highbuyorders = $query->result_array();

            if(count($highbuyorders) > 0){
              foreach ($highbuyorders as $highbuyorder) {
                $data = array(
                  'order_status_id' => 2
                );
                $this->db->where('order_id', $highbuyorder['order_id']);
                $this->db->update('orders', $data);
              }
            }
          }
        }

        $this->db->where('type', "sell");
        $this->db->where('order_status_id', 1);
        $query = $this->db->get('orders');
        $sellingorders = $query->result_array();

        if(count($sellingorders) > 0){
          foreach ($sellingorders as $sellingorder) {
            $this->db->where('cid', $sellingorder['cid']);
            $query = $this->db->get('company');
            $companyshare2 = $query->row_array();

            $this->db->where('amount <=', $companyshare2['c_current_share_value']);
            $this->db->where('type', "sell");
            $query = $this->db->get('orders');
            $lowsellorders = $query->result_array();

            if(count($lowsellorders) > 0){
              foreach ($lowsellorders as $lowsellorder) {
                $total_amount = $lowsellorder['amount'] * $lowsellorder['qty'];
                $this->db->where('ba_id', $lowsellorder['ba_id']);
                $query = $this->db->get('bankaccount');
                $current_balance = $query->row()->balance;

                $data = array(
                  'balance' => $current_balance + $total_amount,
                );

                $this->db->where('ba_id', $lowsellorder['ba_id']);
                $this->db->update('bankaccount', $data);

                $data = array(
                  'order_status_id' => 3
                );

                $this->db->where('order_id', $lowsellorder['buy_reference']);
                $this->db->update('orders', $data);

                $data = array(
                  'order_status_id' => 2
                );

                $this->db->where('order_id', $lowsellorder['order_id']);
                $this->db->update('orders', $data);
              }
            }
          }
        }
      }

      public function startup(){
        $sessionadmin = $this->session->userdata('admin');
        $data = array(
          'turn_no' => 0,
          'br_id' => $sessionadmin['user_id']
        );
        $this->db->set($data);
        $this->db->insert('market', $data);

        $this->db->select_max('market_id');
        $query = $this->db->get('market');
        $maxmarketid = $query->row()->market_id;

        $query = $this->db->get('company');
        $companies = $query->result_array();

        foreach ($companies as $company) {
          $rand_no1 = rand(-2,+2);
          $rand_no2 = rand(-2,+2);
          $rand_no3 = rand(-2,+2);
          $rand_no4 = rand(-2,+2);
          $rand_no5 = rand(-2,+2);
          $rand_no6 = rand(-2,+2);
          $rand_no7 = rand(-2,+2);
          $rand_no8 = rand(-2,+2);
          $rand_no9 = rand(-2,+2);
          $rand_no10 = rand(-2,+2);
          $rand_no11 = rand(-2,+2);
          $rand_no12 = rand(-2,+2);
          $rand_no13 = rand(-2,+2);
          $rand_no14 = rand(-2,+2);
          $rand_no15 = rand(-2,+2);
          $rand_no16 = rand(-2,+2);
          $rand_no17 = rand(-2,+2);
          $rand_no18 = rand(-2,+2);
          $rand_no19 = rand(-2,+2);
          $rand_no20 = rand(-2,+2);
          $data = array(
            'market_id' => $maxmarketid,
            'cid' => $company['cid'],
            't1' => $rand_no1,
            't2' => $rand_no2,
            't3' => $rand_no3,
            't4' => $rand_no4,
            't5' => $rand_no5,
            't6' => $rand_no6,
            't7' => $rand_no7,
            't8' => $rand_no8,
            't9' => $rand_no9,
            't10' => $rand_no10,
            't11' => $rand_no11,
            't12' => $rand_no12,
            't13' => $rand_no13,
            't14' => $rand_no14,
            't15' => $rand_no15,
            't16' => $rand_no16,
            't17' => $rand_no17,
            't18' => $rand_no18,
            't19' => $rand_no19,
            't20' => $rand_no20
          );
          $this->db->set($data);
          $this->db->insert('individualtrend');
        }

        $query = $this->db->get('categories');
        $categories = $query->result_array();

        foreach ($categories as $category) {
          $rand_no1 = rand(-3,+3);
          $rand_no2 = rand(-3,+3);
          $rand_no3 = rand(-3,+3);
          $rand_no4 = rand(-3,+3);
          $rand_no5 = rand(-3,+3);
          $rand_no6 = rand(-3,+3);
          $rand_no7 = rand(-3,+3);
          $rand_no8 = rand(-3,+3);
          $rand_no9 = rand(-3,+3);
          $rand_no10 = rand(-3,+3);
          $rand_no11 = rand(-3,+3);
          $rand_no12 = rand(-3,+3);
          $rand_no13 = rand(-3,+3);
          $rand_no14 = rand(-3,+3);
          $rand_no15 = rand(-3,+3);
          $rand_no16 = rand(-3,+3);
          $rand_no17 = rand(-3,+3);
          $rand_no18 = rand(-3,+3);
          $rand_no19 = rand(-3,+3);
          $rand_no20 = rand(-3,+3);
          $data = array(
            'market_id' => $maxmarketid,
            'category_id' => $category['category_id'],
            't1' => $rand_no1,
            't2' => $rand_no2,
            't3' => $rand_no3,
            't4' => $rand_no4,
            't5' => $rand_no5,
            't6' => $rand_no6,
            't7' => $rand_no7,
            't8' => $rand_no8,
            't9' => $rand_no9,
            't10' => $rand_no10,
            't11' => $rand_no11,
            't12' => $rand_no12,
            't13' => $rand_no13,
            't14' => $rand_no14,
            't15' => $rand_no15,
            't16' => $rand_no16,
            't17' => $rand_no17,
            't18' => $rand_no18,
            't19' => $rand_no19,
            't20' => $rand_no20
          );
          $this->db->set($data);
          $this->db->insert('sectortrend');
        }

        $rand_no1 = rand(-3,+3);
        $rand_no2 = rand(-3,+3);
        $rand_no3 = rand(-3,+3);
        $rand_no4 = rand(-3,+3);
        $rand_no5 = rand(-3,+3);
        $rand_no6 = rand(-3,+3);
        $rand_no7 = rand(-3,+3);
        $rand_no8 = rand(-3,+3);
        $rand_no9 = rand(-3,+3);
        $rand_no10 = rand(-3,+3);
        $rand_no11 = rand(-3,+3);
        $rand_no12 = rand(-3,+3);
        $rand_no13 = rand(-3,+3);
        $rand_no14 = rand(-3,+3);
        $rand_no15 = rand(-3,+3);
        $rand_no16 = rand(-3,+3);
        $rand_no17 = rand(-3,+3);
        $rand_no18 = rand(-3,+3);
        $rand_no19 = rand(-3,+3);
        $rand_no20 = rand(-3,+3);
        $data = array(
          'market_id' => $maxmarketid,
          'type' => 'market',
          't1' => $rand_no1,
          't2' => $rand_no2,
          't3' => $rand_no3,
          't4' => $rand_no4,
          't5' => $rand_no5,
          't6' => $rand_no6,
          't7' => $rand_no7,
          't8' => $rand_no8,
          't9' => $rand_no9,
          't10' => $rand_no10,
          't11' => $rand_no11,
          't12' => $rand_no12,
          't13' => $rand_no13,
          't14' => $rand_no14,
          't15' => $rand_no15,
          't16' => $rand_no16,
          't17' => $rand_no17,
          't18' => $rand_no18,
          't19' => $rand_no19,
          't20' => $rand_no20
        );
        $this->db->set($data);
        $this->db->insert('marketeventtrend');

        $rand_no1 = 0;
        $rand_no2 = 0;
        $rand_no3 = 0;
        $rand_no4 = 0;
        $rand_no5 = 0;
        $rand_no6 = 0;
        $rand_no7 = 0;
        $rand_no8 = 0;
        $rand_no9 = 0;
        $rand_no10 = 0;
        $rand_no11 = 0;
        $rand_no12 = 0;
        $rand_no13 = 0;
        $rand_no14 = 0;
        $rand_no15 = 0;
        $rand_no16 = 0;
        $rand_no17 = 0;
        $rand_no18 = 0;
        $rand_no19 = 0;
        $rand_no20 = 0;

        $a = rand(1,13);
        $b = rand(1,5);
        $c = rand(-5,+5);

        for ($i=$a; $i <= ($b+$a); $i++) {
          ${'rand_no' . $i} = $c;
        }
        $data = array(
          'market_id' => $maxmarketid,
          'type' => 'event',
          't1' => $rand_no1,
          't2' => $rand_no2,
          't3' => $rand_no3,
          't4' => $rand_no4,
          't5' => $rand_no5,
          't6' => $rand_no6,
          't7' => $rand_no7,
          't8' => $rand_no8,
          't9' => $rand_no9,
          't10' => $rand_no10,
          't11' => $rand_no11,
          't12' => $rand_no12,
          't13' => $rand_no13,
          't14' => $rand_no14,
          't15' => $rand_no15,
          't16' => $rand_no16,
          't17' => $rand_no17,
          't18' => $rand_no18,
          't19' => $rand_no19,
          't20' => $rand_no20
        );

        $this->db->set($data);
        $this->db->insert('marketeventtrend');

        foreach ($companies as $company) {
          for ($i=1; $i <= 20 ; $i++) {
            $column = 't'.$i;
            $this->db->where('category_id', $company['category_id']);
            $this->db->where('market_id', $maxmarketid);
            $query = $this->db->get('sectortrend');
            $sectorvalue = $query->row()->$column;

            $this->db->where('market_id', $maxmarketid);
            $this->db->where('type', "market");
            $query = $this->db->get('marketeventtrend');
            $marketvalue = $query->row()->$column;

            $this->db->where('market_id', $maxmarketid);
            $this->db->where('type', "event");
            $query = $this->db->get('marketeventtrend');
            $eventvalue = $query->row()->$column;

            $this->db->where('market_id', $maxmarketid);
            $this->db->where('cid', $company['cid']);
            $query = $this->db->get('individualtrend');
            $individualvalue = $query->row()->$column;

            $totalvalue = $sectorvalue + $marketvalue + $eventvalue + $individualvalue;

            if ($i == 1) {
              if ($totalvalue <= 0) {
                $vt = $company['c_current_share_value'];
              }
              else{
                $vt = ((($company['c_current_share_value'] / 100) * $totalvalue)) + $company['c_current_share_value'];
              }

              $data = array(
                'market_id' => $maxmarketid,
                'cid' => $company['cid'],
                'v_t1' => $vt
              );
              $this->db->set($data);
              $this->db->insert('sharevalue', $data);
            }
            else{
              $precolumn = 'v_t'.($i-1);
              if ($totalvalue <= 0) {
                $this->db->where('market_id', $maxmarketid);
                $this->db->where('cid', $company['cid']);
                $query = $this->db->get('sharevalue');
                $pretotal = $query->row()->$precolumn;
                $vt = $pretotal;
              }
              else{
                $this->db->where('market_id', $maxmarketid);
                $this->db->where('cid', $company['cid']);
                $query = $this->db->get('sharevalue');
                $pretotal = $query->row()->$precolumn;
                $vt = ((($pretotal / 100) * $totalvalue)) + $pretotal;
              }

              $data = array(
                'v_t'.$i => $vt
              );
              $this->db->set($data);
              $this->db->where('market_id', $maxmarketid);
              $this->db->where('cid', $company['cid']);
              $this->db->update('sharevalue', $data);
            }
          }
        }

        for ($i=1; $i <= 20 ; $i++) {
          $columnid = 'v_t'.$i;
          $this->Startup_model->market_turn();
          $this->db->select_max('market_id');
          $query = $this->db->get('market');
          $currentmarketid = $query->row()->market_id;
          $data = array(
            'turn_no' => $i
          );
          $this->db->where('market_id', $currentmarketid);
          $this->db->update('market', $data);

          $query = $this->db->get('company');
          $allcompanies = $query->result_array();
          $this->db->select_max('market_id');
          $query = $this->db->get('market');
          $currentmaxmarketid = $query->row()->market_id;
          foreach ($allcompanies as $company) {
            $this->db->where('cid', $company['cid']);
            $this->db->where('market_id', $currentmaxmarketid);
            $query = $this->db->get('sharevalue');
            $currentvt = $query->row()->$columnid;

            $data = array(
              'c_current_share_value' => $currentvt
            );

            $this->db->where('cid', $company['cid']);
            $this->db->update('company', $data);
          }
          sleep(15);
        }
      }
   }
 ?>
