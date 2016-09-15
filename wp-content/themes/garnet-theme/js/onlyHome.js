/**
 * Created by Руслан on 31.08.2016.
 */
jQuery(document).ready(function () {

    var jqBar = $('.main__c');
    if (jqBar) {
        var jqBarStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) {
                jqBarStatus = false;
                $('.c__p').circleProgress({
                    fill: {color: ["#4dddf8"]}
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('.c__a').html(parseInt(15 * progress));
                    $(this).find('.c__b').html(parseInt(180 * progress));
                    $(this).find('.c__c').html(parseInt(350 * progress));
                    $(this).find('.c__d').html(parseInt(7 * progress));
                });
            }
        });
    }

    $(".calculator__steps .calculator__step[data-target-my='step1']").click(function (event) {
        event.preventDefault();
        var target = $(this).attr("data-target-my");
        $(".stepp, .calculator__step").removeClass('active-my');
        $(".stepp." + target).addClass('active-my');
        $(this).addClass('active-my');
    });

    $(".next-step a, .calculator__step[data-target-my='step2']").click(function (event) {
        event.preventDefault();

        if ($(".calculator__form-input input[name='name']").val() !== "" && $(".calculator__form-input input[name='phone']").val() !== "") {
            $(".stepp, .calculator__step").removeClass('active-my');
            var target = $(this).attr("data-target-my");
            $(".stepp." + target).addClass('active-my');
            $(".calculator__step[data-target-my='step2']").addClass('active-my');
        } else {
            $(".calculator__form-input input").each(function (i) {
                var self = $(this);
                var interval;
                if (self.val() === "") {
                    self.addClass('disabled');
                    interval = setInterval(function () {
                        self.removeClass('disabled');
                        clearInterval(interval);
                    }, 5000);
                }
            })
        }

    });

    var init = function(){
        var isMobile = navigator.userAgent &&
            navigator.userAgent.toLowerCase().indexOf('mobile') >= 0;
        var isSmall = window.innerWidth < 1000;

        var ps = new ParticleSlider({
            ptlGap: isMobile || isSmall ? 3 : 0,
            ptlSize: isMobile || isSmall ? 3 : 1,
            width: 1e9,
            height: 1e9
        });

        // var gui = new dat.GUI();
        // gui.add(ps, 'ptlGap').min(0).max(5).step(1).onChange(function(){
        //     ps.init(true);
        // });
        // gui.add(ps, 'ptlSize').min(1).max(5).step(1).onChange(function(){
        //     ps.init(true);
        // });
        // gui.add(ps, 'restless');
        // gui.addColor(ps, 'color').onChange(function(value){
        //     ps.monochrome = true;
        //     ps.setColor(value);
        //     ps.init(true);
        // });
    //
    //
        (window.addEventListener
            ? window.addEventListener('click', function(){ps.init(true)}, false)
            : window.onclick = function(){ps.init(true)});
    };

    var initParticleSlider = function(){
        var psScript = document.createElement('script');
        (psScript.addEventListener
            ? psScript.addEventListener('load', init, false)
            : psScript.onload = init);
        psScript.src = 'http://particleslider.com/js/particleslider/current/particleslider.js';
        psScript.setAttribute('type', 'text/javascript');
        document.body.appendChild(psScript);
    };

    (window.addEventListener
        ? window.addEventListener('load', initParticleSlider, false)
        : window.onload = initParticleSlider);



    var c = document.getElementById('c');


    if (c) {
        ctx = c.getContext('2d');
        var precision = 15, scale = 150;
// rotDur + timeOffset <= totalDuration
        var totalDuration = 3.6, rotDur = 1.5, timeOffset = 1.9;
        var rotAmpl = Math.PI;

        function easing(t) {
            return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
        }

        var shape = (function generateShape() {
            var v = [], e = [];
            var t = (1 + Math.sqrt(5)) * .5;

            v.push([-1, t, 0]);
            v.push([1, t, 0]);
            v.push([-1, -t, 0]);
            v.push([1, -t, 0]);

            v.push([0, -1, t]);
            v.push([0, 1, t]);
            v.push([0, -1, -t]);
            v.push([0, 1, -t]);

            v.push([t, 0, -1]);
            v.push([t, 0, 1]);
            v.push([-t, 0, -1]);
            v.push([-t, 0, 1]);

            // Lazy duplicate removal
            var cache = {};

            function addEdge(a, b) {
                var id = Math.min(a, b) + '|' + Math.max(a, b);
                if (!cache[id])e.push([a, b]), cache[id] = 1;
            }

            function tri(a, b, c) {
                addEdge(a, b);
                addEdge(b, c);
                addEdge(c, a);
            }

            tri(0, 11, 5);
            tri(0, 5, 1);
            tri(0, 1, 7);
            tri(0, 7, 10);
            tri(0, 10, 11);

            tri(1, 5, 9);
            tri(5, 11, 4);
            tri(11, 10, 2);
            tri(10, 7, 6);
            tri(7, 1, 8);

            tri(3, 9, 4);
            tri(3, 4, 2);
            tri(3, 2, 6);
            tri(3, 6, 8);
            tri(3, 8, 9);

            tri(4, 9, 5);
            tri(2, 4, 11);
            tri(6, 2, 10);
            tri(8, 6, 7);
            tri(9, 8, 1);

            return {vertices: v, edges: e};
        })();

        function rotateX(p, a) {
            var d = Math.sqrt(p[1] * p[1] + p[2] * p[2]),
                na = Math.atan2(p[1], p[2]) + a;
            return [p[0], d * Math.sin(na), d * Math.cos(na)];
        }

        function rotateY(p, a) {
            var d = Math.sqrt(p[0] * p[0] + p[2] * p[2]),
                na = Math.atan2(p[2], p[0]) + a;
            return [d * Math.cos(na), p[1], d * Math.sin(na)];
        }

        (window.onresize = function () {
            c.width = c.offsetWidth;
            c.height = c.offsetHeight;
            ctx.translate(c.width * .5, c.height * .5);
            scale = Math.min(c.width, c.height) * .2;
        })();

        function getRot(time, off) {
            var end = totalDuration - off * timeOffset,
                start = end - rotDur;
            return (time < start ? 0 : time > end ? rotAmpl : rotAmpl * easing((time - start) / (end - start)));
        }

        function getPoint(v, p, time) {
            var vt = [p * v[0], p * v[1], p * v[2]];
            vt = rotateY(vt, getRot(time, 1 - p));
            var timeP = time / totalDuration;
            vt = rotateX(vt, timeP * Math.PI);
            return [scale * vt[0], scale * vt[1]];
        }

        function loop(time) {
            requestAnimationFrame(loop);
            time = (time / 1000) % totalDuration;
            ctx.clearRect(-c.width * .5, -c.height * .5, c.width, c.height);
            ctx.beginPath();
            var i, l;
            for (i = 0, l = shape.vertices.length; i < l; i++) {
                var v = shape.vertices[i];
                ctx.moveTo(0, 0);
                var previous = getPoint(v, 1 / precision, time);
                for (var t = 2; t < precision; t++) {
                    var p = getPoint(v, t / precision, time);
                    var xc = (previous[0] + p[0]) * .5;
                    var yc = (previous[1] + p[1]) * .5;
                    ctx.quadraticCurveTo(previous[0], previous[1], xc, yc);
                    previous = p;
                }
                var last = getPoint(v, 1, time);
                ctx.quadraticCurveTo(previous[0], previous[1], last[0], last[1]);
            }
            for (i = 0, l = shape.edges.length; i < l; i++) {
                var e = shape.edges[i];
                var p1 = getPoint(shape.vertices[e[0]], 1, time), p2 = getPoint(shape.vertices[e[1]], 1, time);
                ctx.moveTo(p1[0], p1[1]);
                ctx.lineTo(p2[0], p2[1]);
            }
            ctx.strokeStyle = '#fff';
            ctx.stroke();
        }

        requestAnimationFrame(loop);
    }



});