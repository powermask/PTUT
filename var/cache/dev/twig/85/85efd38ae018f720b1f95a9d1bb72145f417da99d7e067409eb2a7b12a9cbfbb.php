<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54bede8d25740bf2748913733190288ffaff91cd97a63bd4aec2585517a65e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21928be849c997330fd114482ffeeb09a1a89acc35198ceb147f33ecf5a27bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21928be849c997330fd114482ffeeb09a1a89acc35198ceb147f33ecf5a27bb3->enter($__internal_21928be849c997330fd114482ffeeb09a1a89acc35198ceb147f33ecf5a27bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5067e160adedc3d678c176b2ed32616a828f9172fd361b2383744bbce9ccf11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5067e160adedc3d678c176b2ed32616a828f9172fd361b2383744bbce9ccf11f->enter($__internal_5067e160adedc3d678c176b2ed32616a828f9172fd361b2383744bbce9ccf11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21928be849c997330fd114482ffeeb09a1a89acc35198ceb147f33ecf5a27bb3->leave($__internal_21928be849c997330fd114482ffeeb09a1a89acc35198ceb147f33ecf5a27bb3_prof);

        
        $__internal_5067e160adedc3d678c176b2ed32616a828f9172fd361b2383744bbce9ccf11f->leave($__internal_5067e160adedc3d678c176b2ed32616a828f9172fd361b2383744bbce9ccf11f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f80400e6042862e60465b41820f03c6e5bb0e71a4316c67eefefb0fefd9ae18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80400e6042862e60465b41820f03c6e5bb0e71a4316c67eefefb0fefd9ae18b->enter($__internal_f80400e6042862e60465b41820f03c6e5bb0e71a4316c67eefefb0fefd9ae18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c619f0a11a04ec908889b5b313044314f78621db3e4443107e89e7acde974890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c619f0a11a04ec908889b5b313044314f78621db3e4443107e89e7acde974890->enter($__internal_c619f0a11a04ec908889b5b313044314f78621db3e4443107e89e7acde974890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c619f0a11a04ec908889b5b313044314f78621db3e4443107e89e7acde974890->leave($__internal_c619f0a11a04ec908889b5b313044314f78621db3e4443107e89e7acde974890_prof);

        
        $__internal_f80400e6042862e60465b41820f03c6e5bb0e71a4316c67eefefb0fefd9ae18b->leave($__internal_f80400e6042862e60465b41820f03c6e5bb0e71a4316c67eefefb0fefd9ae18b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e28b61022e191b0cd07b8421efd31b1aaca15a49eeae114b12bb8ab160f66cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28b61022e191b0cd07b8421efd31b1aaca15a49eeae114b12bb8ab160f66cb9->enter($__internal_e28b61022e191b0cd07b8421efd31b1aaca15a49eeae114b12bb8ab160f66cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc0870d7d1041c88a8c5f7f3f62d308577302868989fd377fc0fa0110ffb3c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0870d7d1041c88a8c5f7f3f62d308577302868989fd377fc0fa0110ffb3c30->enter($__internal_cc0870d7d1041c88a8c5f7f3f62d308577302868989fd377fc0fa0110ffb3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc0870d7d1041c88a8c5f7f3f62d308577302868989fd377fc0fa0110ffb3c30->leave($__internal_cc0870d7d1041c88a8c5f7f3f62d308577302868989fd377fc0fa0110ffb3c30_prof);

        
        $__internal_e28b61022e191b0cd07b8421efd31b1aaca15a49eeae114b12bb8ab160f66cb9->leave($__internal_e28b61022e191b0cd07b8421efd31b1aaca15a49eeae114b12bb8ab160f66cb9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2a012f4270c61228959d6ebb92e46ce7f2973296de0ca7510aabda754781ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a012f4270c61228959d6ebb92e46ce7f2973296de0ca7510aabda754781ae0->enter($__internal_f2a012f4270c61228959d6ebb92e46ce7f2973296de0ca7510aabda754781ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6adaf2cce1caa4c78e388a834f1debcf8bc94aea527c9be008f548944f5a4387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adaf2cce1caa4c78e388a834f1debcf8bc94aea527c9be008f548944f5a4387->enter($__internal_6adaf2cce1caa4c78e388a834f1debcf8bc94aea527c9be008f548944f5a4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6adaf2cce1caa4c78e388a834f1debcf8bc94aea527c9be008f548944f5a4387->leave($__internal_6adaf2cce1caa4c78e388a834f1debcf8bc94aea527c9be008f548944f5a4387_prof);

        
        $__internal_f2a012f4270c61228959d6ebb92e46ce7f2973296de0ca7510aabda754781ae0->leave($__internal_f2a012f4270c61228959d6ebb92e46ce7f2973296de0ca7510aabda754781ae0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
