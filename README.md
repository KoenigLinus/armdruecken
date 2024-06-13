# Armdrücken!

## Inhalt

0. **Prolog**
1. **Einleitung und Übersicht:** Eine kurze und prägnante Beschreibung des Projekts, einschließlich seiner Ziele und des Nutzens. Klar definieren, wer die Hauptnutzer der Dokumentation sein werden (z.B. Entwickler, Endbenutzer, Systemadministratoren).
2. **Technische Spezifikationen:** Darstellung des Datenbankmodells mit ER-Diagrammen und Beschreibungen der Tabellen, Felder und Beziehungen. Liste der verwendeten Technologien, Programmiersprachen, Frameworks und Tools.
3. **Benutzerdokumentation:** Anleitungen zur Nutzung der Webdatenbank für Endbenutzer, einschließlich Navigation, Suchfunktionen und Dateneingabe. Visuelle Anleitungen oder Videos, die die Nutzung der Webdatenbank demonstrieren.
4. **Entwicklerdokumentation:** Ausführliche Kommentierung und Beschreibung des Quellcodes, API-Dokumentation und Beispielcodes.
5. Anhang

## Prolog

> Manche Leute können ‚Krieg und Frieden‘ lesen und glauben, es sei eine schlichte Abenteuergeschichte. Andere lesen die Ingredentien auf einem Kaugummipapier und ihnen erschließt sich das Universum.“
> *– Lex Luther in „Superman“ 1978*

Es ist wichtig aus der Geschichte zu lernen. Aber, wie? Man denkt einfach Dinge aus seinem Hinterkpf kramen zu können reiche aus, aber tut es das. Um diese Fragen zu für alle mal zu erschließen beschloss ich den Wettkampf aller Wettkämpfe die Schulhofbeschäftigung schlecht hin zu analysieren. Der eiserne Wettkampf um oben oder unten, um Sieg oder Verlust.

Der ewige Kampft gegen die eigene soziale Annerkennung treibt Menschen in die Wissenschaft. Einen möglichst schnellen Übergang der Bizepskräfte in den der Trizepse. Das Verlangen nach Mehr brachte eine breite von neuen Techniken und Übungen in die Sozietät Schule.

Ich habe mich diese angenommen. Eine Gruppe von Menschen nichts mehr als die Optimierung im Sinn.

## Einleitung

Das Projekt *Armdrücken!* besitzt einen künstlerischen Ursprung. Es kommt aus einer Welt in der es nicht, um Sinn oder Unsinn ging. Viel mehr aus einer in welcher die Lebensfreude und der Spaß an oberster Stelle steht.

Das Spiel Armdrücken entstammt einer Spieltradition der sehr alten Berufsgruppe der Holzfäller. Sie mussten sich entsprechend ihrer Berufsgruppe Geselligkeiten zum Zeitvertreib ausdenken. Der Kampf Holzfäller\*in gegen Holzfäller\*in kam dort wie gelegen. Jedoch ohne die Gefahr eines echten Zweikampfes, alleine Fokussiert auf das Notwendige (Jenen Ansatz habe ich ebenso in meine Programmierung einfließen lassen).

Mein Programm hintgegen bietet des passende kognitive Gegenstück zum rohen Austausch der eigenen Kräfte. Man könnte fast meinen für einen Ausgewogenen Lebensstil sei mein Programm notwendig.

Die Nutzer sind klar interessiert am Ergebnis ihrer eigenen Leistungen, suchen sich jedoch auch Rivalen, welche sie selbst übertreffen wollen.

## Technische Spekifikationen

### ER-Modell

Mein ER-Modell ist schnell erklärt. Es ist simpel, ist aber auch perfekt an meine Bedürfnisse Zugeschnitten.

1. **Personen:** Sie beinhalten, neben der `ID` den `Nickname` der korrispondierenden Person.
2. **Match:** Ein match ist ein Spiel bei dem es einen `Zeitpunkt` (TIMESTAMP, Datum und Uhrzeit) gibt sowie eine `Dauer`.

Die Relationen sind ebenso simpel doch bis aufs kleine verfeinert und ausgetüftelt.

1. **Sieger\*in:** Die Person, dessen Hand oben liegt.
2. **Verlierer\*in:** Die Person, dessen Hand, von der Überlegenheit der Gegnerin, des Gegners herunter gedrückt wurde.

## Verwendete Technologien

Den grundsätzlichen Aufbau verdanke ich `HTML`. Das Aussehen `css`. Beides, wie mein drittes für die Logikzuständige Tool `JavaScript`, Standarts im Bereich der Webentwicklung. Ich habe mich aufgrund der Wurzeln meines Themas für bodenständige und bewehrte Technologien zurückgegriffen.

Für die zunehmende Speizalisierungen im Bereich des Armdrückens griff ich jedoch auch auf speziellere Tool zurück. Für meine Datenbank verwendete ich `SQL`, für ihre Verwaltung `mySQL` mit welcher via `php` kommunizieren konnte. `phpmyadmin` half mir mit seiner `gui`, welche ich durch `Apache` erreichen konnte, außerdem stellte es mir ein Preview zur Verfügung. Diese Programme benutze ich alleine auf der Basis von `XAMPP` (*C*ross-Platform + *A*pache + *M*ySQL + *P*HP + *P*erl). Die `Fetch API` erlaubte es mir die mittels `PHP` erlangten Daten in meinen `JavaScript` code einzubinden.

Moderner ist `ApexCharts.js`, welche mir die Möglichkeit eröffnete Grafiken ohne großen Aufwand zu erstellen.

- `HTML`, `css`, `JavaScript`
- `SQL`,
- `XAMPP`: `mySQL`, `phpmyadmin`, `php`, `Apatche`
- `ApexCharts.js`
