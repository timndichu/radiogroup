<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa9310a28676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f636f6d6d6f6e2e70726f746f121b676f6f676c652e636c6f75642e" .
            "74616c656e742e763462657461311a1f676f6f676c652f70726f746f6275" .
            "662f74696d657374616d702e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f77726170706572732e70726f746f1a16676f6f676c652f7479" .
            "70652f646174652e70726f746f1a18676f6f676c652f747970652f6c6174" .
            "6c6e672e70726f746f1a17676f6f676c652f747970652f6d6f6e65792e70" .
            "726f746f1a20676f6f676c652f747970652f706f7374616c5f6164647265" .
            "73732e70726f746f1a1b676f6f676c652f747970652f74696d656f666461" .
            "792e70726f746f226e0a0e54696d657374616d7052616e6765122e0a0a73" .
            "746172745f74696d6518012001280b321a2e676f6f676c652e70726f746f" .
            "6275662e54696d657374616d70122c0a08656e645f74696d651802200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022" .
            "b7030a084c6f636174696f6e12490a0d6c6f636174696f6e5f7479706518" .
            "012001280e32322e676f6f676c652e636c6f75642e74616c656e742e7634" .
            "62657461312e4c6f636174696f6e2e4c6f636174696f6e5479706512320a" .
            "0e706f7374616c5f6164647265737318022001280b321a2e676f6f676c65" .
            "2e747970652e506f7374616c4164647265737312240a076c61745f6c6e67" .
            "18032001280b32132e676f6f676c652e747970652e4c61744c6e6712140a" .
            "0c7261646975735f6d696c657318042001280122ef010a0c4c6f63617469" .
            "6f6e54797065121d0a194c4f434154494f4e5f545950455f554e53504543" .
            "49464945441000120b0a07434f554e545259100112170a1341444d494e49" .
            "53545241544956455f415245411002121b0a175355425f41444d494e4953" .
            "545241544956455f415245411003120c0a084c4f43414c4954591004120f" .
            "0a0b504f5354414c5f434f4445100512100a0c5355425f4c4f43414c4954" .
            "59100612120a0e5355425f4c4f43414c4954595f31100712120a0e535542" .
            "5f4c4f43414c4954595f32100812100a0c4e45494748424f52484f4f4410" .
            "0912120a0e5354524545545f41444452455353100a229f010a0f52657175" .
            "6573744d65746164617461120e0a06646f6d61696e18012001280912120a" .
            "0a73657373696f6e5f6964180220012809120f0a07757365725f69641803" .
            "2001280912190a11616c6c6f775f6d697373696e675f6964731804200128" .
            "08123c0a0b6465766963655f696e666f18052001280b32272e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e44657669636549" .
            "6e666f22260a10526573706f6e73654d6574616461746112120a0a726571" .
            "756573745f696418012001280922cf010a0a446576696365496e666f1247" .
            "0a0b6465766963655f7479706518012001280e32322e676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461312e446576696365496e666f" .
            "2e44657669636554797065120a0a026964180220012809226c0a0a446576" .
            "69636554797065121b0a174445564943455f545950455f554e5350454349" .
            "46494544100012070a035745421001120e0a0a4d4f42494c455f57454210" .
            "02120b0a07414e44524f4944100312070a03494f53100412070a03424f54" .
            "100512090a054f54484552100622510a0f437573746f6d41747472696275" .
            "746512150a0d737472696e675f76616c75657318012003280912130a0b6c" .
            "6f6e675f76616c75657318022003280312120a0a66696c74657261626c65" .
            "18032001280822570a125370656c6c696e67436f7272656374696f6e1211" .
            "0a09636f7272656374656418012001280812160a0e636f72726563746564" .
            "5f7465787418022001280912160a0e636f727265637465645f68746d6c18" .
            "0320012809229c090a10436f6d70656e736174696f6e496e666f12500a07" .
            "656e747269657318012003280b323f2e676f6f676c652e636c6f75642e74" .
            "616c656e742e763462657461312e436f6d70656e736174696f6e496e666f" .
            "2e436f6d70656e736174696f6e456e747279126b0a22616e6e75616c697a" .
            "65645f626173655f636f6d70656e736174696f6e5f72616e676518022001" .
            "280b323f2e676f6f676c652e636c6f75642e74616c656e742e7634626574" .
            "61312e436f6d70656e736174696f6e496e666f2e436f6d70656e73617469" .
            "6f6e52616e6765126c0a23616e6e75616c697a65645f746f74616c5f636f" .
            "6d70656e736174696f6e5f72616e676518032001280b323f2e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e436f6d70656e73" .
            "6174696f6e496e666f2e436f6d70656e736174696f6e52616e67651a9203" .
            "0a11436f6d70656e736174696f6e456e747279124c0a0474797065180120" .
            "01280e323e2e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e436f6d70656e736174696f6e496e666f2e436f6d70656e736174" .
            "696f6e54797065124c0a04756e697418022001280e323e2e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e436f6d70656e7361" .
            "74696f6e496e666f2e436f6d70656e736174696f6e556e697412240a0661" .
            "6d6f756e7418032001280b32122e676f6f676c652e747970652e4d6f6e65" .
            "79480012500a0572616e676518042001280b323f2e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e436f6d70656e736174696f" .
            "6e496e666f2e436f6d70656e736174696f6e52616e6765480012130a0b64" .
            "65736372697074696f6e180520012809123d0a1765787065637465645f75" .
            "6e6974735f7065725f7965617218062001280b321c2e676f6f676c652e70" .
            "726f746f6275662e446f75626c6556616c756542150a13636f6d70656e73" .
            "6174696f6e5f616d6f756e741a6f0a11436f6d70656e736174696f6e5261" .
            "6e6765122c0a106d61785f636f6d70656e736174696f6e18022001280b32" .
            "122e676f6f676c652e747970652e4d6f6e6579122c0a106d696e5f636f6d" .
            "70656e736174696f6e18012001280b32122e676f6f676c652e747970652e" .
            "4d6f6e657922b5010a10436f6d70656e736174696f6e5479706512210a1d" .
            "434f4d50454e534154494f4e5f545950455f554e53504543494649454410" .
            "0012080a0442415345100112090a05424f4e5553100212110a0d5349474e" .
            "494e475f424f4e55531003120a0a06455155495459100412120a0e50524f" .
            "4649545f53484152494e471005120f0a0b434f4d4d495353494f4e531006" .
            "12080a04544950531007121b0a174f544845525f434f4d50454e53415449" .
            "4f4e5f545950451008229c010a10436f6d70656e736174696f6e556e6974" .
            "12210a1d434f4d50454e534154494f4e5f554e49545f554e535045434946" .
            "4945441000120a0a06484f55524c59100112090a054441494c591002120a" .
            "0a065745454b4c591003120b0a074d4f4e54484c591004120a0a06594541" .
            "524c591005120c0a084f4e455f54494d451006121b0a174f544845525f43" .
            "4f4d50454e534154494f4e5f554e49541007229e010a0d43657274696669" .
            "636174696f6e12140a0c646973706c61795f6e616d651801200128091227" .
            "0a0c616371756972655f6461746518022001280b32112e676f6f676c652e" .
            "747970652e4461746512260a0b6578706972655f6461746518032001280b" .
            "32112e676f6f676c652e747970652e4461746512110a09617574686f7269" .
            "747918042001280912130a0b6465736372697074696f6e18052001280922" .
            "b8010a05536b696c6c12140a0c646973706c61795f6e616d651801200128" .
            "0912290a0e6c6173745f757365645f6461746518022001280b32112e676f" .
            "6f676c652e747970652e4461746512410a056c6576656c18032001280e32" .
            "322e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "536b696c6c50726f66696369656e63794c6576656c120f0a07636f6e7465" .
            "7874180420012809121a0a12736b696c6c5f6e616d655f736e6970706574" .
            "18052001280922770a09496e7465727669657712330a06726174696e6718" .
            "062001280b32232e676f6f676c652e636c6f75642e74616c656e742e7634" .
            "62657461312e526174696e6712350a076f7574636f6d6518072001280e32" .
            "242e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "4f7574636f6d6522450a06526174696e67120f0a076f766572616c6c1801" .
            "20012801120b0a036d696e180220012801120b0a036d6178180320012801" .
            "12100a08696e74657276616c18042001280122cc030a1642617463684f70" .
            "65726174696f6e4d6574616461746112480a05737461746518012001280e" .
            "32392e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e42617463684f7065726174696f6e4d657461646174612e537461746512" .
            "190a1173746174655f6465736372697074696f6e18022001280912150a0d" .
            "737563636573735f636f756e7418032001280512150a0d6661696c757265" .
            "5f636f756e7418042001280512130a0b746f74616c5f636f756e74180520" .
            "012805122f0a0b6372656174655f74696d6518062001280b321a2e676f6f" .
            "676c652e70726f746f6275662e54696d657374616d70122f0a0b75706461" .
            "74655f74696d6518072001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d70122c0a08656e645f74696d6518082001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70227a0a" .
            "05537461746512150a1153544154455f554e535045434946494544100012" .
            "100a0c494e495449414c495a494e471001120e0a0a50524f43455353494e" .
            "471002120d0a095355434345454445441003120a0a064641494c45441004" .
            "120e0a0a43414e43454c4c494e471005120d0a0943414e43454c4c454410" .
            "062a790a0b436f6d70616e7953697a65121c0a18434f4d50414e595f5349" .
            "5a455f554e535045434946494544100012080a044d494e49100112090a05" .
            "534d414c4c1002120b0a07534d454449554d1003120a0a064d454449554d" .
            "100412070a034249471005120a0a06424947474552100612090a05474941" .
            "4e5410072ae2010a0a4a6f6242656e65666974121b0a174a4f425f42454e" .
            "454649545f554e5350454349464945441000120e0a0a4348494c445f4341" .
            "52451001120a0a0644454e54414c100212140a10444f4d45535449435f50" .
            "4152544e4552100312120a0e464c455849424c455f484f5552531004120b" .
            "0a074d45444943414c100512120a0e4c4946455f494e535552414e434510" .
            "0612120a0e504152454e54414c5f4c45415645100712130a0f5245544952" .
            "454d454e545f504c414e1008120d0a095349434b5f444159531009120c0a" .
            "085641434154494f4e100a120a0a06564953494f4e100b2a8e020a0a4465" .
            "6772656554797065121b0a174445475245455f545950455f554e53504543" .
            "4946494544100012150a115052494d4152595f454455434154494f4e1001" .
            "121d0a194c4f5745525f5345434f4e444152595f454455434154494f4e10" .
            "02121d0a1955505045525f5345434f4e444152595f454455434154494f4e" .
            "1003121c0a184144554c545f52454d454449414c5f454455434154494f4e" .
            "1004121c0a184153534f4349415445535f4f525f4551554956414c454e54" .
            "1005121b0a1742414348454c4f52535f4f525f4551554956414c454e5410" .
            "0612190a154d4153544552535f4f525f4551554956414c454e541007121a" .
            "0a16444f43544f52414c5f4f525f4551554956414c454e5410082adc010a" .
            "0e456d706c6f796d656e7454797065121f0a1b454d504c4f594d454e545f" .
            "545950455f554e5350454349464945441000120d0a0946554c4c5f54494d" .
            "451001120d0a09504152545f54494d451002120e0a0a434f4e5452414354" .
            "4f52100312140a10434f4e54524143545f544f5f484952451004120d0a09" .
            "54454d504f524152591005120a0a06494e5445524e1006120d0a09564f4c" .
            "554e544545521007120c0a085045525f4449454d100812120a0e464c595f" .
            "494e5f464c595f4f5554100912190a154f544845525f454d504c4f594d45" .
            "4e545f54595045100a2a710a084a6f624c6576656c12190a154a4f425f4c" .
            "4556454c5f554e5350454349464945441000120f0a0b454e5452595f4c45" .
            "56454c1001120f0a0b455850455249454e4345441002120b0a074d414e41" .
            "4745521003120c0a084449524543544f521004120d0a0945584543555449" .
            "564510052aba060a0b4a6f6243617465676f7279121c0a184a4f425f4341" .
            "5445474f52595f554e5350454349464945441000121a0a164143434f554e" .
            "54494e475f414e445f46494e414e43451001121d0a1941444d494e495354" .
            "5241544956455f414e445f4f46464943451002121d0a1941445645525449" .
            "53494e475f414e445f4d41524b4554494e471003120f0a0b414e494d414c" .
            "5f434152451004121a0a164152545f46415348494f4e5f414e445f444553" .
            "49474e100512170a13425553494e4553535f4f5045524154494f4e531006" .
            "121b0a17434c45414e494e475f414e445f464143494c4954494553100712" .
            "130a0f434f4d50555445525f414e445f4954100812100a0c434f4e535452" .
            "554354494f4e100912140a10435553544f4d45525f53455256494345100a" .
            "120d0a09454455434154494f4e100b121c0a18454e5445525441494e4d45" .
            "4e545f414e445f54524156454c100c12180a144641524d494e475f414e44" .
            "5f4f5554444f4f5253100d120e0a0a4845414c544843415245100e12130a" .
            "0f48554d414e5f5245534f5552434553100f12270a23494e5354414c4c41" .
            "54494f4e5f4d41494e54454e414e43455f414e445f524550414952101012" .
            "090a054c4547414c1011120e0a0a4d414e4147454d454e541012121f0a1b" .
            "4d414e55464143545552494e475f414e445f57415245484f555345101312" .
            "240a204d454449415f434f4d4d554e49434154494f4e535f414e445f5752" .
            "4954494e47101412160a124f494c5f4741535f414e445f4d494e494e4710" .
            "15121e0a1a504552534f4e414c5f434152455f414e445f53455256494345" .
            "53101612170a1350524f544543544956455f53455256494345531017120f" .
            "0a0b5245414c5f4553544154451018121e0a1a52455354415552414e545f" .
            "414e445f484f53504954414c495459101912140a1053414c45535f414e44" .
            "5f52455441494c101a121b0a17534349454e43455f414e445f454e47494e" .
            "454552494e47101b12220a1e534f4349414c5f53455256494345535f414e" .
            "445f4e4f4e5f50524f464954101c12210a1d53504f5254535f4649544e45" .
            "53535f414e445f52454352454154494f4e101d12200a1c5452414e53504f" .
            "52544154494f4e5f414e445f4c4f47495354494353101e2a650a0d506f73" .
            "74696e67526567696f6e121e0a1a504f5354494e475f524547494f4e5f55" .
            "4e535045434946494544100012170a1341444d494e495354524154495645" .
            "5f415245411001120a0a064e4154494f4e1002120f0a0b54454c45434f4d" .
            "4d55544510032a6e0a0a5669736962696c697479121a0a16564953494249" .
            "4c4954595f554e535045434946494544100012100a0c4143434f554e545f" .
            "4f4e4c59100112160a125348415245445f574954485f474f4f474c451002" .
            "12160a125348415245445f574954485f5055424c494310031a0218012a5a" .
            "0a10436f6e74616374496e666f557361676512220a1e434f4e544143545f" .
            "494e464f5f55534147455f554e5350454349464945441000120c0a085045" .
            "52534f4e414c100112080a04574f524b1002120a0a065343484f4f4c1003" .
            "2a710a1048746d6c53616e6974697a6174696f6e12210a1d48544d4c5f53" .
            "414e4954495a4154494f4e5f554e5350454349464945441000121e0a1a48" .
            "544d4c5f53414e4954495a4154494f4e5f44495341424c45441001121a0a" .
            "1653494d504c455f464f524d415454494e475f4f4e4c5910022a630a0d43" .
            "6f6d6d7574654d6574686f64121e0a1a434f4d4d5554455f4d4554484f44" .
            "5f554e5350454349464945441000120b0a0744524956494e471001120b0a" .
            "075452414e5349541002120b0a0757414c4b494e471003120b0a07435943" .
            "4c494e4710042aa2010a15536b696c6c50726f66696369656e63794c6576" .
            "656c12270a23534b494c4c5f50524f46494349454e43595f4c4556454c5f" .
            "554e5350454349464945441000120d0a09554e534b494c4c454410061219" .
            "0a1546554e44414d454e54414c5f41574152454e4553531001120a0a064e" .
            "4f56494345100212100a0c494e5445524d4544494154451003120c0a0841" .
            "4456414e4345441004120a0a0645585045525410052a660a074f7574636f" .
            "6d6512170a134f5554434f4d455f554e5350454349464945441000120c0a" .
            "08504f5349544956451001120b0a074e45555452414c1002120c0a084e45" .
            "474154495645100312190a154f5554434f4d455f4e4f545f415641494c41" .
            "424c45100442790a1f636f6d2e676f6f676c652e636c6f75642e74616c65" .
            "6e742e76346265746131420b436f6d6d6f6e50726f746f50015a41676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f636c6f75642f74616c656e742f763462657461313b74616c65" .
            "6e74a20203435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

