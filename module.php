<?
class ProData2 extends IPSModule
{
    public function __construct($InstanceID)
    {
        parent::__construct($InstanceID);
    }
    public function Create()
    {
        parent::Create();
        $this->ConnectParent("{A5F663AB-C400-4FE5-B207-4D67CC030564}");							//????????? A5F663AB-C400-4FE5-B207-4D67CC030564 ???
        $this->RegisterPropertyInteger("Interval", 0);
		
		$this->RegisterPropertyBoolean("Digital_Input_1", false);
		$this->RegisterPropertyBoolean("Digital_Input_2", false);
		$this->RegisterPropertyBoolean("Digital_Input_3", false);
		$this->RegisterPropertyBoolean("Digital_Input_4", false);
		$this->RegisterPropertyBoolean("Digital_Input_5", false);
		$this->RegisterPropertyBoolean("Digital_Input_6", false);
		$this->RegisterPropertyBoolean("Digital_Input_7", false);
		$this->RegisterPropertyBoolean("Digital_Input_8", false);
		$this->RegisterPropertyBoolean("Digital_Input_9", false);
		$this->RegisterPropertyBoolean("Digital_Input_10", false);
		$this->RegisterPropertyBoolean("Digital_Input_11", false);
		$this->RegisterPropertyBoolean("Digital_Input_12", false);
		$this->RegisterPropertyBoolean("Digital_Input_13", false);
		$this->RegisterPropertyBoolean("Digital_Input_14", false);
		$this->RegisterPropertyBoolean("Digital_Input_15", false);
		
        $this->RegisterTimer("UpdateTimer", 0, "ProData2_RequestRead(\$_IPS['TARGET']);");
    }
    public function ApplyChanges()
    {
        parent::ApplyChanges();
	

//Variable Anlegen oder Löschen 

//DigitalEingang1
	if ($this->ReadPropertyBoolean("Digital_Input_1") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_1", "Digital_Input_1", "Status", 1);				// 1 - 15 ??? ,ich denke dies ist die Reihenfolge
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_1");
	}
		
//DigitalEingang2
	if ($this->ReadPropertyBoolean("Digital_Input_2") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_2", "Digital_Input_2", "Status", 2);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_2");
	}
	
//DigitalEingang3
	if ($this->ReadPropertyBoolean("Digital_Input_3") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_3", "Digital_Input_3", "Status", 3);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_3");
	}
	
//DigitalEingang4
	if ($this->ReadPropertyBoolean("Digital_Input_4") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_4", "Digital_Input_4", "Status", 4);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_4");
	}
	
//DigitalEingang5
	if ($this->ReadPropertyBoolean("Digital_Input_5") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_5", "Digital_Input_5", "Status", 5);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_5");
	}
	
//DigitalEingang6
	if ($this->ReadPropertyBoolean("Digital_Input_6") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_6", "Digital_Input_6", "Status", 6);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_6");
	}
	
//DigitalEingang7
	if ($this->ReadPropertyBoolean("Digital_Input_7") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_7", "Digital_Input_7", "Status", 7);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_7");
	}
	
//DigitalEingang8
	if ($this->ReadPropertyBoolean("Digital_Input_8") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_8", "Digital_Input_8", "Status", 8);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_8");
	}
	
//DigitalEingang9
	if ($this->ReadPropertyBoolean("Digital_Input_9") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_9", "Digital_Input_9", "Status", 9);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_9");
	}
	
//DigitalEingang10
	if ($this->ReadPropertyBoolean("Digital_Input_10") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_10", "Digital_Input_10", "Status", 10);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_10");
	}
	
//DigitalEingang11
	if ($this->ReadPropertyBoolean("Digital_Input_11") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_11", "Digital_Input_11", "Status", 11);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_11");
	}
	
//DigitalEingang12
	if ($this->ReadPropertyBoolean("Digital_Input_12") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_12", "Digital_Input_12", "Status", 12);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_12");
	}
	
//DigitalEingang13
	if ($this->ReadPropertyBoolean("Digital_Input_13") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_13", "Digital_Input_13", "Status", 13);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_13");
	}
	
//DigitalEingang14
	if ($this->ReadPropertyBoolean("Digital_Input_14") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_14", "Digital_Input_14", "Status", 14);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_14");
	}
	
//DigitalEingang15
	if ($this->ReadPropertyBoolean("Digital_Input_15") === true)
		{
	$this->RegisterVariableBoolean("Digital_Input_15", "Digital_Input_15", "Status", 15);				
		}
	else
	{
		$this->UnregisterVariable("Digital_Input_15");
	}


		//bis hier fertig
		
	//									Ident				Name				Profil	?
	//	$this->RegisterVariableBoolean 	("Digital_Input_1", "Status Eingang 1", "Status", 1);
	//	$this->RegisterVariableFloat	("VoltL2", 			"Volt L2-L3", 		"Volt", 1);
		
	$this->RegisterVariableBoolean("Digital_Input_1", "Status Eingang 1", "Alert", 1);		//Syntax?
    $this->RegisterVariableBoolean("Digital_Input_2", "Status Eingang 2", "Alert", 2);    
    $this->RegisterVariableBoolean("Digital_Input_3", "Status Eingang 3", "Alert", 3);
	$this->RegisterVariableBoolean("Digital_Input_4", "Status Eingang 4", "Alert", 4);
	$this->RegisterVariableBoolean("Digital_Input_5", "Status Eingang 5", "Alert", 5);
	$this->RegisterVariableBoolean("Digital_Input_6", "Status Eingang 6", "Alert", 6);
	$this->RegisterVariableBoolean("Digital_Input_7", "Status Eingang 7", "Alert", 7);
	$this->RegisterVariableBoolean("Digital_Input_8", "Status Eingang 8", "Alert", 8);
	$this->RegisterVariableBoolean("Digital_Input_9", "Status Eingang 9", "Alert", 9);
	$this->RegisterVariableBoolean("Digital_Input_10", "Status Eingang 10", "Alert", 10);
	$this->RegisterVariableBoolean("Digital_Input_11", "Status Eingang 11", "Alert", 11);
	$this->RegisterVariableBoolean("Digital_Input_12", "Status Eingang 12", "Alert", 12);
	$this->RegisterVariableBoolean("Digital_Input_13", "Status Eingang 13", "Alert", 13);
	$this->RegisterVariableBoolean("Digital_Input_14", "Status Eingang 14", "Alert", 14);
	$this->RegisterVariableBoolean("Digital_Input_15", "Status Eingang 15", "Alert", 15);
        
		
		
		
		
		
		
		
	if ($this->ReadPropertyInteger("Interval") > 0)
        $this->SetTimerInterval("UpdateTimer", $this->ReadPropertyInteger("Interval"));
    else
        $this->SetTimerInterval("UpdateTimer", 0);
    }
    
		
public function RequestRead()
    {
        $Gateway = IPS_GetInstance($this->InstanceID)['ConnectionID'];
        if ($Gateway == 0)
            return false;
        $IO = IPS_GetInstance($Gateway)['ConnectionID'];
        if ($IO == 0)
            return false;
        if (!$this->lock($IO))
            return false;
	
	
	
	
//Eingang_1
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3740 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }

//Eingang_2
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3741 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_3
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3742 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_4
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3743 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_5
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3744 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_6
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3745 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_7
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3746 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_8
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3747 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_9
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3748 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_10
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3749 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_11
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3750 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_12
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3751 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_14
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3752 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }
		
//Eingang_15
         for ($index = 0; $index < 3; $index++)
        {
            $Eingang_1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 3753 + ($index * 2), "Quantity" => 2, "Data" => "")));
            if ($Status === false)
            {
                $this->unlock($IO);
                return false;
            }
            $Status = unpack("f", strrev(substr($Status, 2)))[1];
            $this->SendDebug('Status Eingang 1', $Status, 0);
	    SetValue($this->GetIDForIdent("Digital_Input_" . ($index + 1)), $Status);
        }

//		//Spannung L1-N, L2-N, L3-N	
//	for ($index = 0; $index < 3; $index++)
//        {
//            $Volt2 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 19000 + ($index * 2), "Quantity" => 2, "Data" => "")));
//            if ($Volt2 === false)
//            {
//                $this->unlock($IO);
//                return false;
//            }
//            $Volt2 = unpack("f", strrev(substr($Volt2, 2)))[1];
//            $this->SendDebug('Volt L'. ($index + 1), $Volt2, 0);
//	    SetValue($this->GetIDForIdent("Volt2L" . ($index + 1)), $Volt2);
//        }
	
	
      
// 	//Temperatur 1
//        $Temp1 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 10865, "Quantity" => 2, "Data" => "")));
//        if ($Temp1 === false)
//        {
//            $this->unlock($IO);
//            return false;
//        }
//        $Temp1 = unpack("f", strrev(substr($Temp1, 2)))[1];
//        $this->SendDebug('Temperatur 1', $Temp1, 0);
//        SetValue($this->GetIDForIdent("Temp1"), $Temp1);

//	//Temperatur 2
//        $Temp2 = $this->SendDataToParent(json_encode(Array("DataID" => "{E310B701-4AE7-458E-B618-EC13A1A6F6A8}", "Function" => 3, "Address" => 10867, "Quantity" => 2, "Data" => "")));
//        if ($Temp2 === false)
//        {
//            $this->unlock($IO);
//            return false;
//        }
//        $Temp2 = unpack("f", strrev(substr($Temp2, 2)))[1];
//        $this->SendDebug('Temperatur 2', $Temp2, 0);
//        SetValue($this->GetIDForIdent("Temp2"), $Temp2);




        IPS_Sleep(333);
        $this->unlock($IO);
        return true;
    }



    /**
     * Versucht eine Semaphore zu setzen und wiederholt dies bei Misserfolg bis zu 100 mal.
     * @param string $ident Ein String der den Lock bezeichnet.
     * @return boolean TRUE bei Erfolg, FALSE bei Misserfolg.
     */
    private function lock($ident)
    {
        for ($i = 0; $i < 100; $i++)
        {
            if (IPS_SemaphoreEnter('ModBus' . '.' . (string) $ident, 1))
            {
                return true;
            }
            else
            {
                IPS_Sleep(5);
            }
        }
        return false;
    }
    /**
     * Löscht eine Semaphore.
     * @param string $ident Ein String der den Lock bezeichnet.
     */
    private function unlock($ident)
    {
        IPS_SemaphoreLeave('ModBus' . '.' . (string) $ident);
    }
}
?>
