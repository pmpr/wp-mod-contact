<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977cbacc023             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Contact\Model\Submission; use Pmpr\Module\Contact\Setting; trait SubmitTrait { public function ygkskmsksmmiqaqu(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) : bool { $occymigcemkqucuw = false; if ($icwicymcioeyeyek) { goto miyqyeiwquwsacsm; } $icwicymcioeyeyek = ManipulateServer::yyqgamuwwakgciey(); miyqyeiwquwsacsm: try { if ($yeccawueyssugoko = Submission::symcgieuakksimmu()) { goto wmmggowmigekyoso; } $uamcoiueqaamsqma = $this->aqgegcykekmuggsu(); goto soqqemyioggmoakg; wmmggowmigekyoso: $icwicymcioeyeyek = ManipulateArray::gucyquqwoimkiiaq($icwicymcioeyeyek, [$yeccawueyssugoko::NAME, $yeccawueyssugoko::muqaqimusmckkieq, $yeccawueyssugoko::memskaacyikisggk, $yeccawueyssugoko::qkimemawswowsmoa, $yeccawueyssugoko::oeoceeacyascgkai, $yeccawueyssugoko::eoskkkieowogacws], true, "\x65\163\143\x5f\x73\161\x6c"); $icwicymcioeyeyek[$yeccawueyssugoko::ioksewgkgwwikiwo] = ManipulateUser::meymqemgekqiawec(); $icwicymcioeyeyek[$yeccawueyssugoko::iockmgiyoygcswog] = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($icwicymcioeyeyek, $yeccawueyssugoko::iockmgiyoygcswog)); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto eegqyykygiccaoeo; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; goto ywqgcegomwaiuquc; eegqyykygiccaoeo: $uamcoiueqaamsqma = Setting::eiwcuqigayigimak(Setting::aiyeuymiomaukaaa); $occymigcemkqucuw = true; ywqgcegomwaiuquc: soqqemyioggmoakg: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $occymigcemkqucuw; } }
