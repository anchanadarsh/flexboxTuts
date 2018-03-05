<!doctype html>
<html lang="en-US">

<head>
    <title>Flexbox</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
</head>

<body>
    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none p-tb-md bg-f1f">
        <div class="container">
            <section id="zero" class="diff-section">
                <h4>Parent container having <strong>"display:block"</strong> property</h4>
                <div class="flex-cont">
                    <div class="flex-box"></div>
                    <div class="flex-box"></div>
                </div>
            </section>
            <section id="one" class="diff-section">
                <h4>Parent container having <strong>"display:flex"</strong> property</h4>
                <h5>parent element acts as ROW and child as COLUMN <strong>(Default)-----<em>flex-direction:'row'</em></strong>
                </h5>
                <div class="flex-cont">
                    <div class="flex-box"></div>
                    <div class="flex-box"></div>
                </div>
            </section>
            <section id="one1" class="diff-section">
                <h4>Parent container having <strong>"display : flex"</strong> & <strong><em>flex-direction : 'column'</em></strong> property</h4>
                <h5>parent element acts as COLUMN and child as ROW</h5>
                <div class="flex-cont">
                    <div class="flex-box"></div>
                    <div class="flex-box"></div>
                </div>
            </section>
            <section id="two" class="diff-section">
                <h4>child element having <strong>"flex : 1"</strong> property with no width property</h4>
                <div class="flex-cont">
                    <div class="flex-box">
                        <h2>1</h2>
                    </div>
                    <div class="flex-box">
                        <h2>2</h2>
                    </div>
                    <div class="flex-box">
                        <h2>3</h2>
                    </div>
                </div>
            </section>
            <section id="two1" class="diff-section">
                <h4>aligning text to center (vertically and horizontally) just by setting <br><strong>"display : flex"</strong> property to parent <br><strong>"margin : auto"</strong> property to text </h4>
                <div class="flex-cont">
                    <div class="flex-box">
                        <h2>1</h2>
                    </div>
                    <div class="flex-box">
                        <h2>hgvsajhvajhcv jhjh jhbkjbksah bkjbaskjb kbk bsbksj</h2>
                    </div>
                    <div class="flex-box">
                        <h2>3</h2>
                    </div>
                </div>
            </section>
            <section id="three" class="diff-section">
                <h4>child element having <strong>"order"</strong> property that changes the order of elements <strong>without changing the order in html file</strong></h4>
                <div class="flex-cont">
                    <div class="flex-box box1">
                        <h2>1</h2>
                    </div>
                    <div class="flex-box box2">
                        <h2>2</h2>
                    </div>
                    <div class="flex-box box3">
                        <h2>3</h2>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="clearfix"></div>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>
