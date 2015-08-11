# oxid-eshop-modul
1.Einführung </br>
Das Modul kann dem Käufer die Abweichung zwischen dem Wert seines Warenkorbs und dem Mindestbestellwert anzeigen, den er beim Einkauf erreichen muss, um seine Ware versandkostenfrei zu erhalten.</br>
</br>
Die Funktionen des Moduls im Überblick:</br>
</br>
(1)Einer Tipp wird unterhalb der Menüleiste erscheinen, nachdem man auf den Knopf "to the basket" drückt.</br>
(2)Dieser Tipp kann der Kunde zeigen, wie viele Euro er noch braucht, damit seine Artikels kostenlos versendet werden können.</br>
</br>
Das Modul wird basierend auf OXID eshop Version 4.9.4.</br>
</br>
2.Installation</br>
(1)Lädet man die Zip-Datei herunter und entkomprimiert man es.</br>
(2)Kopiert man den Ordner 'zpffd' (zpf ist die Abkürzung des meines Names), dann legt man es unter dem Verzeichnis /modules seines OXID eshops.</br>
(3)Öffnet man die Datei /application/views/azure/tpl/layout/header.tpl, dann legt man einen eigenen Block mit dem Name "show_tips_header" unterhalb <div id="header" class="clear">. Ich zeige es wie folgend:</br>
</br>
<div id="header" class="clear"></br>
 .....</br>
</div></br>
[{block name="show_tips_header"}]</br>
[{/block}]</br>
</br>
(4)Geht man im Administrationsbereich des shops zu Shopeinstellungen->Versandkostenregeln, findet man eine Regel "Versandkosten für Standard: Versandkostenfrei ab 80,-",(Natürlich kann man auch eine neue Regel aufbauen.) dann verändert man den Wert 80 zu seinem erwünschten Wert. In meinem Modul ist der Wert 100. Wenn man einen anderen Wert verändert,z.B 50, muss man den Variablenwert von $dFreeDeliveryCondition in der Datei zpffd/freedelivery/models/zpffd_freedelivery_oxbasket.php auch 50 verändern. </br>
</br>
(5)Geht man im Administrationsbereich des shops zu Erweiterungen->Module, kann man unseres Modul "Versandkostenfrei" in der Listenansicht finden, dann drückt man auf die Schaltfläche Aktivieren.</br>
</br>
(6)Geht man zu Startseite, und nach jedem hinzufügen zum Warenkorb kann man den Tipp sehen.</br>
</br>
