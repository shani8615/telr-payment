 $params = array(
                'ivp_method'  => 'create',
                'ivp_store'   => '20224',
                'ivp_authkey' => 'Your API key',
                'ivp_cart'    => -orderId-,  
                'ivp_test'    => '0',
                'ivp_amount'  => -amount-,
                'ivp_currency'=> 'SAR',
                'ivp_desc'    => 'Product Description',
                'bill_title'  => 'Mr', 	
                'bill_fname' => '',
                'bill_sname' =>  '',	
                'bill_addr1' => '',
                'bill_city' =>  '',	
                'bill_country'=> '',
                'bill_email' => '', 	
                'return_auth' => 'https://www.google.com',
                'return_can'  => 'https://www.google.com',
                'return_decl' => 'https://www.google.com'
            );
            $url = "https://secure.telr.com/gateway/order.json";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
            
            $results = curl_exec($ch);
            
            curl_close($ch);
            
            echo $results;
