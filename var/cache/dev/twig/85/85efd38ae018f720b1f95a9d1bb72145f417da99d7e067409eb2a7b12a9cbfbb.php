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
        $__internal_759b15133109ab613d20341e0bff7af3e46fa4863909f2ae8af0870b56ed85c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759b15133109ab613d20341e0bff7af3e46fa4863909f2ae8af0870b56ed85c0->enter($__internal_759b15133109ab613d20341e0bff7af3e46fa4863909f2ae8af0870b56ed85c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9149d72da812ba56b25a175b30539746dbdb872df99cdac860c0f2da31c0fcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9149d72da812ba56b25a175b30539746dbdb872df99cdac860c0f2da31c0fcb8->enter($__internal_9149d72da812ba56b25a175b30539746dbdb872df99cdac860c0f2da31c0fcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759b15133109ab613d20341e0bff7af3e46fa4863909f2ae8af0870b56ed85c0->leave($__internal_759b15133109ab613d20341e0bff7af3e46fa4863909f2ae8af0870b56ed85c0_prof);

        
        $__internal_9149d72da812ba56b25a175b30539746dbdb872df99cdac860c0f2da31c0fcb8->leave($__internal_9149d72da812ba56b25a175b30539746dbdb872df99cdac860c0f2da31c0fcb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53d162d9c50d320802e97b15c6d2fc234122a399d6d321476cc11b364b0736e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d162d9c50d320802e97b15c6d2fc234122a399d6d321476cc11b364b0736e5->enter($__internal_53d162d9c50d320802e97b15c6d2fc234122a399d6d321476cc11b364b0736e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bf6b3242891f54d42edac9b6f8b916831707c6b5d4445b0c57f64a5d0a8b9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf6b3242891f54d42edac9b6f8b916831707c6b5d4445b0c57f64a5d0a8b9aa->enter($__internal_7bf6b3242891f54d42edac9b6f8b916831707c6b5d4445b0c57f64a5d0a8b9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7bf6b3242891f54d42edac9b6f8b916831707c6b5d4445b0c57f64a5d0a8b9aa->leave($__internal_7bf6b3242891f54d42edac9b6f8b916831707c6b5d4445b0c57f64a5d0a8b9aa_prof);

        
        $__internal_53d162d9c50d320802e97b15c6d2fc234122a399d6d321476cc11b364b0736e5->leave($__internal_53d162d9c50d320802e97b15c6d2fc234122a399d6d321476cc11b364b0736e5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6201792943fa90982834d695cd6da5c589df7b433219b9fc771cb7b3792e8b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6201792943fa90982834d695cd6da5c589df7b433219b9fc771cb7b3792e8b12->enter($__internal_6201792943fa90982834d695cd6da5c589df7b433219b9fc771cb7b3792e8b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fddb756f0f252bf861187340a00abfcb187812df10f876b8b6cc1254024d4d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddb756f0f252bf861187340a00abfcb187812df10f876b8b6cc1254024d4d89->enter($__internal_fddb756f0f252bf861187340a00abfcb187812df10f876b8b6cc1254024d4d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fddb756f0f252bf861187340a00abfcb187812df10f876b8b6cc1254024d4d89->leave($__internal_fddb756f0f252bf861187340a00abfcb187812df10f876b8b6cc1254024d4d89_prof);

        
        $__internal_6201792943fa90982834d695cd6da5c589df7b433219b9fc771cb7b3792e8b12->leave($__internal_6201792943fa90982834d695cd6da5c589df7b433219b9fc771cb7b3792e8b12_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eedb3a69fc7cc176fbd45a80c9bd555cffb56f76b7ee22368125025400405705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedb3a69fc7cc176fbd45a80c9bd555cffb56f76b7ee22368125025400405705->enter($__internal_eedb3a69fc7cc176fbd45a80c9bd555cffb56f76b7ee22368125025400405705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09ef13ec13ae6c3c08a70e2a4852278a5e19ceb62beca4956ada059656d156f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ef13ec13ae6c3c08a70e2a4852278a5e19ceb62beca4956ada059656d156f9->enter($__internal_09ef13ec13ae6c3c08a70e2a4852278a5e19ceb62beca4956ada059656d156f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_09ef13ec13ae6c3c08a70e2a4852278a5e19ceb62beca4956ada059656d156f9->leave($__internal_09ef13ec13ae6c3c08a70e2a4852278a5e19ceb62beca4956ada059656d156f9_prof);

        
        $__internal_eedb3a69fc7cc176fbd45a80c9bd555cffb56f76b7ee22368125025400405705->leave($__internal_eedb3a69fc7cc176fbd45a80c9bd555cffb56f76b7ee22368125025400405705_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
