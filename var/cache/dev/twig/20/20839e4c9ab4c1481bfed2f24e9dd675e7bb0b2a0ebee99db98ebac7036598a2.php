<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4ecfd74a1037bf1f0d06394a435916895ee5ce6b501033ff54a9c01b03044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_914f2acac5c58c0c1567ac944a874aaf213b3545574ab0defd4d98a7e126de08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914f2acac5c58c0c1567ac944a874aaf213b3545574ab0defd4d98a7e126de08->enter($__internal_914f2acac5c58c0c1567ac944a874aaf213b3545574ab0defd4d98a7e126de08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_951bf175a77549ce0308ed8a5ea2cf8fc8c457c2870f2910f17267ec404a2bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951bf175a77549ce0308ed8a5ea2cf8fc8c457c2870f2910f17267ec404a2bdf->enter($__internal_951bf175a77549ce0308ed8a5ea2cf8fc8c457c2870f2910f17267ec404a2bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914f2acac5c58c0c1567ac944a874aaf213b3545574ab0defd4d98a7e126de08->leave($__internal_914f2acac5c58c0c1567ac944a874aaf213b3545574ab0defd4d98a7e126de08_prof);

        
        $__internal_951bf175a77549ce0308ed8a5ea2cf8fc8c457c2870f2910f17267ec404a2bdf->leave($__internal_951bf175a77549ce0308ed8a5ea2cf8fc8c457c2870f2910f17267ec404a2bdf_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_65a5b76279a4aefc36d694270fc2547881d783528f9a07b1e79480b059a7a628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a5b76279a4aefc36d694270fc2547881d783528f9a07b1e79480b059a7a628->enter($__internal_65a5b76279a4aefc36d694270fc2547881d783528f9a07b1e79480b059a7a628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_12ee1f5dc07b0055058f1d8549469b30ddf378e89e22218e43406341845dc877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ee1f5dc07b0055058f1d8549469b30ddf378e89e22218e43406341845dc877->enter($__internal_12ee1f5dc07b0055058f1d8549469b30ddf378e89e22218e43406341845dc877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_12ee1f5dc07b0055058f1d8549469b30ddf378e89e22218e43406341845dc877->leave($__internal_12ee1f5dc07b0055058f1d8549469b30ddf378e89e22218e43406341845dc877_prof);

        
        $__internal_65a5b76279a4aefc36d694270fc2547881d783528f9a07b1e79480b059a7a628->leave($__internal_65a5b76279a4aefc36d694270fc2547881d783528f9a07b1e79480b059a7a628_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4604ad05854d6fa4857228f9551d17c22183fa3f2b1a2b9268170b110a880444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4604ad05854d6fa4857228f9551d17c22183fa3f2b1a2b9268170b110a880444->enter($__internal_4604ad05854d6fa4857228f9551d17c22183fa3f2b1a2b9268170b110a880444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcfdd07d246d7492d76a38de54b91753e35a4fb4087f5c4f193f3c905bac547d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfdd07d246d7492d76a38de54b91753e35a4fb4087f5c4f193f3c905bac547d->enter($__internal_dcfdd07d246d7492d76a38de54b91753e35a4fb4087f5c4f193f3c905bac547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dcfdd07d246d7492d76a38de54b91753e35a4fb4087f5c4f193f3c905bac547d->leave($__internal_dcfdd07d246d7492d76a38de54b91753e35a4fb4087f5c4f193f3c905bac547d_prof);

        
        $__internal_4604ad05854d6fa4857228f9551d17c22183fa3f2b1a2b9268170b110a880444->leave($__internal_4604ad05854d6fa4857228f9551d17c22183fa3f2b1a2b9268170b110a880444_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
