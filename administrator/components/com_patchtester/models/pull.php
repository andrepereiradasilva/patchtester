		$this->setState('github_user', $params->get('org', 'joomla'));
		$this->setState('github_repo', $params->get('repo', 'joomla-cms'));
		$lines = explode("\n", $patch);

		foreach ($lines AS $line) {
		jimport('joomla.client.curl');
		$github = new JGithub;
			throw new Exception(JText::_('COM_PATCHTESTER_REPO_IS_GONE'));
			if ($file->action == 'deleted' && ! file_exists(JPATH_ROOT . '/' . $file->old)) {
				throw new Exception(sprintf(JText::_('COM_PATCHTESTER_FILE_DELETED_DOES_NOT_EXIST_S'), $file->old));
			}
				if (file_exists(JPATH_COMPONENT . '/backups/' . md5($file->new) . '.txt')) {
					throw new Exception(sprintf(JText::_('COM_PATCHTESTER_CONFLICT_S'), $file->new));
				if ($file->action == 'modified' && ! file_exists(JPATH_ROOT . '/' . $file->old)) {
					throw new Exception(sprintf(JText::_('COM_PATCHTESTER_FILE_MODIFIED_DOES_NOT_EXIST_S'), $file->old));
				if( ! JFile::copy(JPath::clean(JPATH_ROOT . '/' . $file->old), JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt')) {
					throw new Exception(sprintf('Can not copy file %s to %s'
					, JPATH_ROOT . '/' . $file->old, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'));
				}
					if( ! JFile::write(JPath::clean(JPATH_ROOT . '/' . $file->new), $file->body)) {
						throw new Exception(sprintf('Can not write the file: %s', JPATH_ROOT . '/' . $file->new));
					}
					if( ! JFile::delete(JPATH::clean(JPATH_ROOT . '/' . $file->old))) {
						throw new Exception(sprintf('Can not delete the file: %s', JPATH_ROOT . '/' . $file->old));
					}

		if ( ! $table->store()) {
			throw new Exception($table->getError());

		return true;
					if ( ! JFile::copy(JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt', JPATH_ROOT . '/' . $file->old)) {
						throw new Exception(sprintf('Can not copy file %s to %s'
						, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'
						, JPATH_ROOT . '/' . $file->old));
					}
					if ( ! JFile::delete(JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt')) {
						throw new Exception(sprintf('Can not delete the file: %s'
						, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'));
					}
					if ( ! JFile::delete(JPath::clean(JPATH_ROOT . '/' . $file->new))) {
						throw new Exception(sprintf('Can not delete the file: %s', JPATH_ROOT . '/' . $file->new));
					}