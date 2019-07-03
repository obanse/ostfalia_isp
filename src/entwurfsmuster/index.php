<header>
    <h1>Entwurfsmuster (design patterns)</h1>
</header>
<main>
    <section class="verhaltensmuster">
        <h2>Verhaltensmuster</h2>
        <article>
            <h3>Template Pattern (Schablone)</h3>
            <p>Das Template Pattern stellt eine abstrakte Klasse bereit, welche abstrakte Methoden/Templates verf&uuml;gbar macht.
                Unterklassen k&ouml;nnen diese Methoden implementieren und nach Bedarf &uuml;berschreiben. Der Aufruf muss jedoch so erfolgen, 
                wie er von einer abstrakten Klasse definiert wird. Dieses Muster f&auml;llt unter die Kategorie Verhaltensmuster.
            </p>
            <img src="images/template-pattern.png" alt="UML-Diagramm: Template Pattern">
            <div>
                <a href="demos/TemplateDemo.php">CarTemplate - Demo</a>
            </div>
        </article>
        <article>
            <h3>Strategy Pattern (Strategie)</h3>
            <p>
                Das Strategy Pattern kann sein Klassenverhalten oder sein Algorithmus zur Laufzeit &auml;ndern. Diese Art von Entwurfsmuster
                f&auml;llt unter die Kategorie Verhaltensmuster.<br>
                Beim Strategy Pattern erstellen wir Objekte, die verschiedene Strategien dartellen und ein Kontextobjekt, dessen Verhalten 
                je nach Strategieobjekt variiert. Das Strategieobjekt &auml;ndert den Ausf&uuml;hrungsalgorithmus des Kontextobjekts.
            </p>
            <img src="images/strategy-pattern.png" alt="UML Diagramm: Strategy Pattern">
            <div>
                <a href="demos/StrategyDemo.php">CarStrategy - Demo</a>
            </div>
        </article>
        <article>
            <h3>Observer Pattern (Beobachter)</h3>
            <p>
                Das Observer Pattern wird verwendet wenn eine One-To-Many Beziehung zwischen Objekten besteht. z.B. wenn ein Objekt ge&auml;ndert 
                wird, werden seine abh&auml;ngigen Objekte automatisch benachrichtigt. Das Observer Pattern f&auml;llt unter die Kategorie der Verhaltensmuster.
            </p>
            <img src="images/observer-pattern.png" alt="UML Diagramm: Observer Pattern">
            <div>
                <a href="demos/ObserverDemo.php">CarObserver - Demo</a>
            </div>
        </article>
    </section>
    <section class="erzeugungsmuster">
        <h2>Erzeugungsmuster</h2>
        <article>
            <h3>Factory Pattern (Fabrikmethode)</h3>
            <p>
                Das Factory Pattern ist eines der am h&auml;ufigsten verwendeten Entwurfsmuster in Java. Diese Art von Entwurfsmuster f&auml;llt 
                unter die Erzeugungsmuster, da dieses Muster eine der besten M&ouml;glichkeiten zum Erstellen eines Objekts darstellt.<br>
                Beim Factory Pattern erstellen wir ein Objekt, ohne die Erstellungslogik f&uuml;r den Client verf&uuml;gbar zu machen und verweisen 
                &uuml;ber eine gemeinsame Schnittstelle auf ein neu erstelltes Objekt.
            </p>
            <img src="images/factory-pattern.png" alt="UML Diagramm: Factory Pattern">
            <div>
                <a href="demos/FactoryDemo.php">CarFactory - Demo</a>
            </div>
        </article>
    </section>
    <section class="strukturmuster">
        <h2>Strukturmuster</h2>
        <article class="adapter-pattern">
            <h3>Adapter Pattern</h3>
            <p>
                Das Adapter Pattern fungiert als Br&uuml;cke zwischen zwei inkompatiblen Schnittstelle. Diese Art von Entwurfsmuster f&auml;llt unter
                das Strukturmuster, da dieses Muster die F&auml;higkeit zweier unabh&auml;ngiger Schnittstellen kombiniert. <br>
                Bei diesem Muster handelt es sich um eine einzelne Klasse, die f&uuml;r die Verkn&uuml;pfung von Funktionen unabh&auml;ngiger oder
                inkompatibler Schnittstellen verantwortlich ist. Ein reales Beispiel koennte ein Kartenleser sein, der als Adapter zwischen
                Speicherkarte und Laptop fungiert. Sie stecken die Speicherkarte in den Kartenleser und den Kartenleser in den Laptop damit die
                Speicherkarte &uuml;ber den Laptop gelesen werden kann.
            </p>
            <img src="images/adapter-pattern.png" alt="UML Diagramm: Adapter Pattern">
            <div>
                <a href="demos/AdapterDemo.php">CarAdapter - Demo</a>
            </div>
        </article>
        <article class="composite-pattern">
            <h3>Composite Pattern (Kompositum)</h3>
            <p>
                Ein zusammengesetztes Muster wird verwendet, wenn die Gruppe von Objekten auf &auml;hnliche Weise, wie ein einzelnes Objekt behandelt
                werden soll. Das Composite Pattern setzt Objekte in Form einer Baumstruktur zusammen, um sowohl Teil- als auch Gesamthierarchie 
                darzustellen. Diese Art von Entwurfsmuster wird als Strukturmuster bezeichnet, da dieses Muster eine Baumstruktur von Objektgruppen
                erstellt.<br>
                Dieses Muster erstellt eine Klasse, die eine Gruppe eigener Objekte enth&auml;lt. Diese Klasse bietet die Moeglichkeiten zum &auml;ndern der 
                Gruppe derselben Objekte.
            </p>
            <img src="images/composite-pattern.png" alt="UML Diagramm: Composite Pattern">
            <div>
                <a href="demos/CompositeDemo.php">CarComposite - Demo</a>
            </div>
            <div>
                <a href="demos/CompositeDemo2.php">CarComposite - Demo 2</a>
            </div>
        </article>
        <article class="proxy-pattern">
            <h3>Proxy Pattern</h3>
            <p>
                Das Proxy Pattern repr&auml;sentiert eine Klasse die Funktionalit&auml;t einer anderen Klasse. Diese Art von Entwurfsmuster f&auml;llt unter die
                Kategorie Strukturmuster.
            </p>
            <img src="images/proxy-pattern.png" alt="UML Diagramm: Proxy Pattern">
            <div>
                <a href="demos/ProxyDemo.php">CarProxy - Demo</a>
            </div>
        </article>
        <article class="decorator-pattern">
            <h3>Decorator Pattern (Dekorierer)</h3>
            <p>Mit dem Decorator Pattern kann ein Benutzer einem vorhandenen Objekt neu Funktionen hinzuf&uuml;gen ohne dessen Struktur
                zu &auml;ndern. Diese Art von Entwurfsmuster f&auml;llt unter die Kategorie Strukturmuster, da dieses Muster als Wrapper f&uuml;r
                die vorhandene Klasse fungiert. <br>
                Dieses Muster erstellt eine Dekorator-Klasse, die die urspr&uuml;ngliche Klasse umschlie&szlig;t und zus&auml;tzliche Funktionen 
                bereitstellt, die die Signatur der Klassenmethoden intakt halten.
            </p>
            <img src="images/decorator-pattern.png" alt="UML Diagramm: Decorator Pattern">
            <div>
                <a href="demos/DecoratorDemo.php">CarDecorater - Demo</a>
            </div>            
        </article>
    </section>

        

</main>


